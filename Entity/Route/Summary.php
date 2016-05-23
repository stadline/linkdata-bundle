<?php

namespace Geonaute\LinkdataBundle\Entity\Route;

use JMS\Serializer\Annotation as Serializer;

class Summary
{

    /**
     * @Serializer\SerializedName("TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $token;

    /**
     * @Serializer\SerializedName("LIBELLE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $libelle;

    /**
     * @Serializer\SerializedName("DISTANCE")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $distance;

    /**
     * @Serializer\SerializedName("ASCENDANT")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $ascendant;

    /**
     * @Serializer\SerializedName("DESCENDANT")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $descendant;

    /**
     * @Serializer\SerializedName("LDID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $ldid;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @return integer
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @return integer
     */
    public function getAscendant()
    {
        return $this->ascendant;
    }

    /**
     * @return integer
     */
    public function getDescendant()
    {
        return $this->descendant;
    }

    /**
     * @return string
     */
    public function getLdid()
    {
        return $this->ldid;
    }

}
