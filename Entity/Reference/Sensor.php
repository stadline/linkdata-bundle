<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Sensor entity.
 */
class Sensor
{
    /**
     * @Serializer\Expose
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID;

    /**
     * @Serializer\Expose
     * @Type("string")
     * @SerializedName("TITLE")
     */
    protected $TITLE;

    /**
     * @Serializer\Expose
     * @Type("string")
     * @SerializedName("UNIT_ID")
     */
    protected $UNIT_ID;

    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function getTITLE()
    {
        return $this->TITLE;
    }

    public function setTITLE($TITLE)
    {
        $this->TITLE = $TITLE;
    }

    public function getUNIT_ID()
    {
        return $this->UNIT_ID;
    }

    public function setUNIT_ID($UNIT_ID)
    {
        $this->UNIT_ID = $UNIT_ID;
    }
}
