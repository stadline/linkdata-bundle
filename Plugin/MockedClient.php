<?php

namespace Geonaute\LinkdataBundle\Plugin;

use Geonaute\LinkdataBundle\Mock\Builder\LinkdataMockBuilder;
use Guzzle\Service\Client;
use Guzzle\Service\Command\OperationCommand;

/**
 * Guzzle client mocked.
 */
class MockedClient extends Client
{
    /**
     * @var LinkdataMockBuilder The mock builder.
     */
    private $builder;

    public function getCommand($name, array $args = array())
    {
        $command = parent::getCommand($name, $args);

        if (!$command instanceof OperationCommand) {
            return $command;
        }

        return $this->builder->build($command);
    }

    /**
     * Set mock builder.
     *
     * @param LinkdataMockBuilder $builder
     */
    public function setBuilder(LinkdataMockBuilder $builder)
    {
        $this->builder = $builder;
    }
}
