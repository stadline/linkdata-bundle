<?php

namespace Geonaute\LinkdataBundle\Entity\Reference;

use JMS\Serializer\Annotation as Serializer;

/**
 * Sport entity.
 *
 * @Serializer\XmlRoot("SPORT")
 */
class Sport
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
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("UNIVERSID")
     */
    protected $UNIVERSID;

    public function getID()
    {
        return $this->ID;
    }

    public function getNAME()
    {
        return $this->NAME;
    }

    public function getUNIVERSID()
    {
        return $this->UNIVERSID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function setNAME($NAME)
    {
        $this->NAME = $NAME;
    }

    public function setUNIVERSID($UNIVERSID)
    {
        $this->UNIVERSID = $UNIVERSID;
    }
}
