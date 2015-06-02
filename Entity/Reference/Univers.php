<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Sport
 *
 * @Serializer\XmlRoot("SPORT")
 */
class Univers
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

    public function getID()
    {
        return $this->ID;
    }

    public function getNAME()
    {
        return $this->NAME;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function setNAME($NAME)
    {
        $this->NAME = $NAME;
    }
}
