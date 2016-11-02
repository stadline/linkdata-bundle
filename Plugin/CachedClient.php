<?php

namespace Geonaute\LinkdataBundle\Plugin;

use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Service\Client;
use Guzzle\Service\Command\DefaultRequestSerializer;
use Guzzle\Service\Command\LocationVisitor\VisitorFlyweight;
use Guzzle\Service\Command\OperationCommand;

class CachedClient extends Client
{
    private $storage = array();
    /** @var RequestSerializerInterface */
    private static $requestSerializer;

    /**
     * @return RequestSerializerInterface
     */
    private function getRequestSerializer()
    {
        if (self::$requestSerializer === null) {
            self::$requestSerializer = new DefaultRequestSerializer(new VisitorFlyweight());
        }
        return self::$requestSerializer;
    }

    public function getCommand($name, array $args = array())
    {
        // Add global client options to the command
        if ($options = $this->getConfig(self::COMMAND_PARAMS)) {
            $args += $options;
        }

        if (!($command = $this->getCommandFactory()->factory($name, $args))) {
            throw new InvalidArgumentException("Command was not found matching {$name}");
        }

        $command->setClient($this);

        if ($command instanceof OperationCommand) {
            $command->setRequestSerializer($this->getRequestSerializer());
        }

        $this->dispatch('client.command.create', array('client' => $this, 'command' => $command));

        // skip cache retrieval if command is not expected type
        if (!$command instanceof OperationCommand) {
            return $command;
        }

        // check http method, purge cache if call is not safe
        $httpMethod = strtoupper($command->getOperation()->getHttpMethod());

        if ($httpMethod == 'GET' || $httpMethod == 'HEAD') {
            return $this->fetchCachedCommand($command, $args);
        } else {
            $this->purgeCache();

            return $command;
        }
    }

    public function fetchCachedCommand(OperationCommand $command, array $args)
    {
        $cacheKey = $this->getCacheKey($command, $args);

        if (!isset($this->storage[$cacheKey])) {
            $this->storage[$cacheKey] = $command;
        }

        return $this->storage[$cacheKey];
    }

    private function getCacheKey(OperationCommand $command, array $args)
    {
        if (!isset($command->cacheKey)) {
            $this->setCacheKey($command, $args);
        }

        return $command->cacheKey;
    }

    private function setCacheKey(OperationCommand $command, array $args)
    {
        $cacheKey = md5(json_encode(array(
            'baseUrl' => $command->getClient()->getBaseUrl(),
            'operationName' => $command->getOperation()->getName(),
            'args' => $args,
        )));

        $command->cacheKey = $cacheKey;
    }

    private function purgeCache()
    {
        $this->storage = array();
    }
}
