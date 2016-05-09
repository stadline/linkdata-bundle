<?php

namespace Geonaute\LinkdataBundle\Response\GetTracksDetails;

use Geonaute\LinkdataBundle\Algorithme\DouglasPeuker\VectorInterface;
use JMS\Serializer\Annotation as Serializer;

class Location implements VectorInterface
{

    /**
     * @Serializer\XmlAttribute()
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $elapsedTime;

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

    /**
     * Returns creation/modification timestamp for element
     * @see http://www.topografix.com/gpx_manual.asp#time
     *
     * @param  string $date (format: Y-m-d H:i:s P)
     * @return string
     */
    public function getTimeFrom($date)
    {
        $startDate = \DateTime::createFromFormat('Y-m-d H:i:s P', $date);

        $startDate->setTimezone(new \DateTimeZone('UTC'));

        $elapsedTime = $this->elapsedTime;
        $creationDate = $startDate->modify("+ $elapsedTime seconds");

        return $creationDate->format('Y-m-d\TH:i:s\Z');
    }

    /**
     * Check if a measure seems wrong to exclude it
     */
    public function isValid()
    {
        // bad elapsedTime
        if ($this->getElapsedTime() > (24 * 3600) || $this->getElapsedTime() < 0) {
            return false;
        }

        return true;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->getLatitude();
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->getLongitude();
    }

    /**
     * @return integer
     */
    public function getIndex()
    {
        return $this->getElapsedTime();
    }

}
