<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;

/**
 * Exercise entity.
 */
class Exercise
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
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("SPORTID")
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
