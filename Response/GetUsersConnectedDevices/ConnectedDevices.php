<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices;

use Guzzle\Service\Command\ResponseClassInterface;

class ConnectedDevices extends \ArrayObject
{
    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $CONNECTEDDEVICES)
    {
        // browse through list
        $collection = array();
        
        foreach ($CONNECTEDDEVICES as $CONNECTEDDEVICE) {
            $connectedDevice = new ConnectedDevice($response, $CONNECTEDDEVICE);
            $collection[$connectedDevice->getId()] = $connectedDevice;
        }
        
        // build ArrayObject using collection
        return parent::__construct($collection);
    }
    
    /**
     * @return ConnectedDevice
     */
    public function getConnectedDevice($id)
    {
        if ($this->offsetExists($id))
            return $this->offsetGet($id);
        
        return false;
    }
    
    /**
     * @return ConnectedDevice
     */
    public function getFirst()
    {
        return reset($this);
    }
    
    /**
     * Get all the distinct models ids of the collection
     * 
     * @return array
     */
    public function getModelIds()
    {
        $output = array();
        
        foreach ($this as $connectedDevice)
        {
            $output[] = $connectedDevice->getModelId();
        }
        
        return array_unique($output);
    }

    /**
     * Get the last create_at date
     *
     * @return string
     */
    public function getLastCreatedAt()
    {
        $output = "";
    
        foreach ($this as $connectedDevice)
        {
            if ($connectedDevice->getCreatedAt() > $output)
                $output = $connectedDevice->getCreatedAt();
        }
    
        return $output;
    }
    
}