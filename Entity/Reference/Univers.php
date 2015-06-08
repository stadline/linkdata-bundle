<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;

/**
 * Sport entity.
 *
 * @Serializer\XmlRoot("SPORT")
 */
class Univers
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
