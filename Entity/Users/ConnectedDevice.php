<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class ConnectedDevice
{

    /**
     * @Serializer\SerializedName("ID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $id;

    /**
     * @Serializer\SerializedName("MODELID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $modelId;

    /**
     * @Serializer\SerializedName("SERIAL")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $serial;

    /**
     * @Serializer\SerializedName("FIRMWAREID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $firmwareId;

    /**
     * @Serializer\SerializedName("CREATED_AT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $createdAt;

    /**
     * @Serializer\SerializedName("LASTCONNECT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $lastConnect;

    /**
     * @Serializer\SerializedName("OWNERSHIP")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $ownership;

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
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @return string
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
