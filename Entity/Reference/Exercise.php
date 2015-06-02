<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Exercise
 */
class Exercise
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
     * @Type("integer")
     * @SerializedName("SPORTID")
     */
    protected $SPORTID;

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
    public function getSPORTID()
    {
        return $this->SPORTID;
    }

    public function setSPORTID($SPORTID)
    {
        $this->SPORTID = $SPORTID;
    }
}
