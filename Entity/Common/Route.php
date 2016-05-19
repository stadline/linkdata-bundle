<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use Geonaute\LinkdataBundle\Entity\Route\Location as RouteLocation;
use JMS\Serializer\Annotation as Serializer;

class Route
{

    /**
     * @Serializer\SerializedName("SUMMARY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Route\Summary")
     *
     * @var Summary
     */
    protected $summary;

    /**
     * @Serializer\SerializedName("LOCATIONS")
     * @Serializer\XmlList(entry = "LOCATION")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Entity\Route\Location>")
     *
     * @var array<RouteLocation>
     */
    protected $locations;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getSummary()->getLibelle();
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->getSummary()->getToken();
    }

    /**
     * @return integer
     */
    public function getDistance()
    {
        return $this->getSummary()->getDistance();
    }

    /**
     * @return Summary
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @return array<RouteLocation>
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Enrich route locations
     * with estimated elapsed time
     */
    public function calculateElapsedTime()
    {
        $distance = 0;

        // save computed distance
        $previous_location = null;
        foreach ($this->getLocations() as $location) {
            if ($previous_location) {
                $distance += $location->getDistanceFromLocation($previous_location);
                $location->setElapsedTime($distance);
            }
            $previous_location = $location;
        }

        // reindex elapsed_time
        foreach ($this->getLocations() as $location) {
            $coeff = $location->getElapsedTime() / $distance;
            $location->setElapsedTime((int) round($coeff * 1000));
        }
    }

}
