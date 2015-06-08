<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;

/**
 * Sensor entity.
 */
class Sensor
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ID")
     */
    protected $ID;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TITLE")
     */
    protected $TITLE;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UNIT_ID")
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
