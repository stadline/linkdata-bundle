<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices;

use Guzzle\Service\Command\ResponseClassInterface;

class ConnectedDevice
{
    private $response;
    private $id;
    private $modelId;
    private $serial;
    private $firmwareId;
    private $createdAt;
    
    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $CONNECTEDDEVICE)
    {
        $this->response    = $response;
        $this->id          = (string) $CONNECTEDDEVICE->ID;
        $this->modelId     = (int)    $CONNECTEDDEVICE->MODELID;
        $this->serial      = (string) $CONNECTEDDEVICE->SERIAL;
        $this->firmwareId  = (string) $CONNECTEDDEVICE->FIRMWAREID;
        $this->createdAt   = (string) $CONNECTEDDEVICE->CREATED_AT;
    }
    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return integer
     */
    public function getModelId()
    {
        return $this->modelId;
    }
    
    /**
     * @return integer
     */
    public function getSerial()
    {
        return $this->serial;
    }
    
    /**
     * @return integer
     */
    public function getFirmwareId()
    {
        return $this->firmwareId;
    }
    
    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * @return DeviceModel
     */
    public function getDeviceModel()
    {
        $response = $this->response->getClient()->getReferenceDeviceModels();
        $devicesModels = $response->getDeviceModels();
    
        return $devicesModels[$this->getModelId()];
    }
    
}