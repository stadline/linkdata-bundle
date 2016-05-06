<?php

namespace Geonaute\LinkdataBundle\Response;

use Guzzle\Service\Command\ResponseClassInterface;
use Guzzle\Service\Command\OperationCommand;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("all")
 */
class XmlResponse implements ResponseClassInterface
{

    protected $rawResponse;

    public static function fromCommand(OperationCommand $command)
    {
        $xml = $command->getResponse()->xml()->asXML();
        $operationName = ucfirst($command->getName());

        $builder = SerializerBuilder::create();
        $builder->addDefaultHandlers();

        $serializer = $builder->build();

        $response = $serializer->deserialize($xml, 'Geonaute\LinkdataBundle\Response\\' . $operationName . '\Response', 'xml');

        $response->rawResponse = $command->getResponse();

        // handle dependency injection
        if ($response instanceof ClientAwareInterface) {
            $response->setClient($command->getClient());
        }

        return $response;
    }

    /**
     * Access the raw response from command
     */
    public function getRawResponse()
    {
        return $this->rawResponse();
    }

}
