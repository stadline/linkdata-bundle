<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;

/**
 * Smartdevice entity.
 */
class Smartdevice
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
     * @Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Reference\SmartdeviceUnit>")
     * @SerializedName("UNITS");
     * @XmlList(entry="UNIT_ID")
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
