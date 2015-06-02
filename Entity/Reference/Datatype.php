<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Datatype
 */
class Datatype
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
     * @SerializedName("NAME")
     */
    protected $NAME;

    /**
     * @Serializer\Expose
     * @Type("string")
     * @SerializedName("UNIT")
     */
    protected $UNIT;
    /**
     * @Serializer\Expose
     * @Type("string")
     * @SerializedName("CUMULABLE")
     */
    protected $CUMULABLE = 0;

    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function getNAME()
    {
        return $this->NAME;
    }

    public function getUNIT()
    {
        return $this->UNIT;
    }

    public function getCUMULABLE()
    {
        return $this->CUMULABLE;
    }

    public function setNAME($NAME)
    {
        $this->NAME = $NAME;
    }

    public function setUNIT($UNIT)
    {
        $this->UNIT = $UNIT;
    }

    public function setCUMULABLE($CUMULABLE)
    {
        $this->CUMULABLE = $CUMULABLE;
    }
}
