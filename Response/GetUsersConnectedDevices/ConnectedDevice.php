<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices;

use JMS\Serializer\Annotation as Serializer;

class ConnectedDevice
{
    /**
     * @Serializer\SerializedName("ID")
     * @Serializer\Type("string")
     * @var string
     */
    private $id;

    /**
     * @Serializer\SerializedName("MODELID")
     * @Serializer\Type("string")
     * @var string
     */
    private $modelId;

    /**
     * @Serializer\SerializedName("SERIAL")
     * @Serializer\Type("string")
     * @var string
     */
    private $serial;

    /**
     * @Serializer\SerializedName("FIRMWAREID")
     * @Serializer\Type("string")
     * @var string
     */
    private $firmwareId;

    /**
     * @Serializer\SerializedName("CREATED_AT")
     * @Serializer\Type("string")
     * @var string
     */
    private $createdAt;

    /**
     * @Serializer\SerializedName("LASTCONNECT")
     * @Serializer\Type("string")
     * @var string
     */
    private $lastConnect;

    /**
     * @Serializer\SerializedName("OWNERSHIP")
     * @Serializer\Type("string")
     * @var string
     */
    private $ownership;
    
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
     * @return string
     */
    public function getLastConnect()
    {
        return $this->lastConnect;
    }

    /**
     * @return string
     */
    public function getOwnership()
    {
        return $this->ownership;
    }
}
