<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;

class Response extends ClientAwareXmlResponse
{
    private $devices;
    
    public function __construct(\SimpleXMLElement $XML)
    {
        parent::__construct($XML);
        
        $this->devices = new ConnectedDevices($this, $XML->CONNECTEDDEVICES[0]);
    }
    
    /**
     * @return connectedDevices
     */
    public function getConnectedDevices()
    {
        return $this->devices;
    }
}