<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;

/**
 * Smartdevice entity.
 */
class Smartdevice
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
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\SmartdeviceUnit>")
     * @Serializer\SerializedName("UNITS");
     * @Serializer\XmlList(entry="UNIT_ID")
     */
    protected $UNITS;

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

    public function __construct()
    {
        $this->smartdevices = new ArrayCollection();
    }

    public function getUNITS()
    {
        return $this->UNITS;
    }

    public function setUNITS($UNITS)
    {
        $this->UNITS = $UNITS;
    }

    public function getDatatypeIds()
    {
        $ids = array();
        foreach ($this->getUNITS() as $unit) {
            $ids[] = $unit->getUNIT_ID();
        }

        return $ids;
    }
}
