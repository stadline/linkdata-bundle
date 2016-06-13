<?php

namespace Geonaute\LinkdataBundle\Entity\Tracks;

use JMS\Serializer\Annotation as Serializer;

class Track
{
    /**
     * @Serializer\SerializedName("LOCATION")
     * @Serializer\XmlMap(inline = true, entry = "LOCATION", keyAttribute="elapsed_time")
     * @Serializer\Type("array<string, Geonaute\LinkdataBundle\Entity\Tracks\Location>")
     *
     * @var array<Location>
     */
    protected $locations;

    /**
     * @return array<Location>
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @return Location
     */
    public function getLocation($elapsedTime)
    {
        return $this->locations[$elapsedTime];
    }

    /**
     * Returns a location array suitable for gmaps js plugin
     *
     * @return array
     */
    public function getLocationsAsArray()
    {
        $locations = [];

        foreach ($this->locations as $location) {
            $locations[] = [
                $location->getLatitude(),
                $location->getLongitude(),
                $location->getElapsedTime(),
            ];
        }

        return $locations;
    }

    /**
     * Returns a location array suitable for route creation
     *
     * @return array
     */
    public function getLocationsAsRoute()
    {
        $locations = [];

        foreach ($this->locations as $location) {
            $locations[] = array(
                'lt' => $location->getLatitude(),
                'lg' => $location->getLongitude(),
                'el' => $location->getElevation(),
            );
        }

        return $locations;
    }

}
