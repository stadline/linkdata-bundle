<?php

namespace Geonaute\LinkdataBundle\Response\GetTracksDetails;

use Geonaute\LinkdataBundle\Algorithme\DouglasPeuker\VectorInterface;
use JMS\Serializer\Annotation as Serializer;

class Location implements VectorInterface
{
    /**
     * @Serializer\XmlAttribute()
     * @Serializer\Type("string")
     * @var integer
     */
    private $elapsedTime;

    /**
     * @Serializer\SerializedName("LATITUDE")
     * @Serializer\Type("string")
     * @var integer
     */
    private $latitude;

    /**
     * @Serializer\SerializedName("LONGITUDE")
     * @Serializer\Type("string")
     * @var integer
     */
    private $longitude;

    /**
     * @Serializer\SerializedName("ELEVATION")
     * @Serializer\Type("string")
     * @var integer
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

        $elapsedTime  = $this->elapsedTime;
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

    public function getX()
    {
        return $this->getLatitude();
    }

    public function getY()
    {
        return $this->getLongitude();
    }

    public function getIndex()
    {
        return $this->getElapsedTime();
    }
}
