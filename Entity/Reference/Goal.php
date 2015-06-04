<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Goal entity.
 */
class Goal
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
}
