<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;

/**
 * Datatype entity.
 */
class Datatype
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
     * @Serializer\SerializedName("NAME")
     */
    protected $NAME;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("UNIT")
     */
    protected $UNIT;
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CUMULABLE")
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
