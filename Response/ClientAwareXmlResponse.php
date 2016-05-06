<?php

namespace Geonaute\LinkdataBundle\Response;

use Guzzle\Service\ClientInterface;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("all")
 */
class ClientAwareXmlResponse extends XmlResponse implements ClientAwareInterface
{

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * Inject client dependency
     *
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client = null)
    {
        $this->client = $client;
    }

    /**
     * @return ClientInterface
     * @throws ParameterNotFoundException
     */
    public function getClient()
    {
        if ($this->client instanceof ClientInterface) {
            return $this->client;
        } else {
            throw new ParameterNotFoundException('client');
        }
    }

}
