<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use JMS\Serializer\Annotation as Serializer;

class Location
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $elapsedTime;

    /**
     * @Serializer\SerializedName("LATITUDE")
     * @Serializer\Type("double")
     *
     * @var float
     */
    protected $latitude;

    /**
     * @Serializer\SerializedName("LONGITUDE")
     * @Serializer\Type("double")
     *
     * @var float
     */
    protected $longitude;

    /**
     * @Serializer\SerializedName("ELEVATION")
     * @Serializer\Type("double")
     *
     * @var float
     */
    protected $elevation;

    /**
     * @return integer
     */
    public function getElapsedTime()
    {
        return $this->elapsedTime;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @return float
     */
    public function getElevation()
    {
        return $this->elevation;
    }

}
