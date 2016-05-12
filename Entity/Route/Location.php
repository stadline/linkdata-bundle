<?php

namespace Geonaute\LinkdataBundle\Entity\Route;

use JMS\Serializer\Annotation as Serializer;

class Location
{

    /**
     * @Serializer\SerializedName("LATITUDE")
     * @Serializer\Type("double")
     *
     * @var float
     */
    private $latitude;

    /**
     * @Serializer\SerializedName("LONGITUDE")
     * @Serializer\Type("double")
     *
     * @var float
     */
    private $longitude;

    /**
     * @Serializer\SerializedName("ELEVATION")
     * @Serializer\Type("double")
     *
     * @var float
     */
    private $elevation;

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $elapsed_time;

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

    /**
     * @return integer
     */
    public function getElapsedTime()
    {
        return $this->elapsed_time;
    }

    /**
     * @param integer $value
     */
    public function setElapsedTime($value)
    {
        $this->elapsed_time = $value;
    }

    /**
     * Returns a computed distance from lat/lng
     * in an abstract unit, NOT in meters
     *
     * @param Location
     * @return integer
     */
    public function getDistanceFromLocation(Location $previous_location)
    {
        $distance_y = abs($this->getLatitude() - $previous_location->getLatitude()) * 1000;
        $distance_x = abs($this->getLongitude() - $previous_location->getLongitude()) * 1000;
        $distance = sqrt(pow(2, $distance_x) + pow(2, $distance_y));

        return (int) round($distance * 1000);
    }

}
