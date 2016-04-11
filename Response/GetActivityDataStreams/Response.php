<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use Geonaute\LinkdataBundle\Response\ClientAwareXmlResponse;

class Response extends ClientAwareXmlResponse
{
    private $activity;
    
    public function __construct(\SimpleXMLElement $XML)
    {
        parent::__construct($XML);
        
        $this->activity = new Activity($this, $XML->ACTIVITY[0]);
    }
    
    /**
     * @return Activity
     */
    public function getActivity()
    {
        return $this->activity;
    }
}