<?php

namespace Geonaute\LinkdataBundle\Entity\Tracks;

use Geonaute\LinkdataBundle\Algorithme\DouglasPeuker\VectorInterface;
use Geonaute\LinkdataBundle\Entity\Common\Location as BaseLocation;

class Location extends BaseLocation implements VectorInterface
{

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
     *
     * @return boolean
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
