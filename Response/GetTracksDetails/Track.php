<?php

namespace Geonaute\LinkdataBundle\Response\GetTracksDetails;

use JMS\Serializer\Annotation as Serializer;

class Track
{
    /**
     * @Serializer\Type("array")
     * @var array
     */
    protected $locations;
    
    public function __construct(\SimpleXMLElement $TRACK)
    {
        $this->locations = array();
        foreach ($TRACK->LOCATION as $LOCATION) {
            $location = new Location($LOCATION);
            if($location->isValid()){
                $this->locations[$location->getElapsedTime()] = $location;
            }
        }
    }
    
    /**
     * @return array
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
     * @return array
     */
    public function getLocationsAsArray()
    {
        $locations = array();
        
        foreach ($this->locations as $location) {
            $locations[] = array(
                $location->getLatitude(),
                $location->getLongitude(),
                $location->getElapsedTime(),
            );
        }

        return $locations;
    }

    /**
     * Returns a location array suitable for route creation
     * @return array
     */
    public function getLocationsAsRoute()
    {
        $locations = array();

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