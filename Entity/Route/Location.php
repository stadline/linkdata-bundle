<?php

namespace Geonaute\LinkdataBundle\Entity\Route;

use Geonaute\LinkdataBundle\Entity\Common\Location as BaseLocation;

class Location extends BaseLocation
{

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
