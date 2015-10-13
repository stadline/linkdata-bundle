<?php

namespace Geonaute\LinkdataBundle\Entity;

use Guzzle\Http\ClientInterface;

interface ClientAwareInterface
{
    public function setClient(ClientInterface $client);
}
