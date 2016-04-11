<?php

namespace Geonaute\LinkdataBundle\Response;

use Guzzle\Service\Command\ResponseClassInterface;
use Guzzle\Service\Command\OperationCommand;
use SimpleXMLElement;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("all")
 */
class XmlResponse implements ResponseClassInterface
{
    protected $rawResponse;

    public static function fromCommand(OperationCommand $command)
    {
        $xml = $command->getResponse()->xml();
        $response = new static($xml);

        $response->rawResponse = $command->getResponse();

        // handle dependency injection
        if ($response instanceof ClientAwareInterface) {
            $response->setClient($command->getClient());
        }

        return $response;
    }

    public function __construct(\SimpleXMLElement $xml)
    {
        $this->xml = $xml;
    }

    /**
     * Access the raw response from command
     */
    public function getRawResponse()
    {
        return $this->rawResponse();
    }
}
