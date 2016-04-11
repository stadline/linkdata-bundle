<?php

namespace Geonaute\LinkdataBundle\Response;

use Guzzle\Service\ClientInterface;

interface ClientAwareInterface
{
    /**
     * Sets the Client.
     *
     * @param ClientInterface|null $client A ClientInterface instance or null
     */
    public function setClient(ClientInterface $client = null);
}