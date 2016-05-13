<?php

namespace Geonaute\Module\LinkdataBundle\Service\GetShares;

use Geonaute\Module\LinkdataBundle\Service\GetTracksDetails\Track as BaseTrack;
use Geonaute\Module\LinkdataBundle\Service\GetTracksDetails\Location;

class Track extends BaseTrack
{
    public function __construct(\SimpleXMLElement $TRACK)
    {
        $this->locations = array();
        foreach ($TRACK->DETAIL->LOCATION as $LOCATION) {
            $location = new Location($LOCATION);
            $this->locations[$location->getElapsedTime()] = $location;
        }
    }
}