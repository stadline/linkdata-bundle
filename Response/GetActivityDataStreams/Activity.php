<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use Guzzle\Service\Command\ResponseClassInterface;

class Activity
{
    private $id;
    private $dataStream;
    
    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $ACTIVITY)
    {
        $this->id          = (string) $ACTIVITY->ID;
        $this->dataStream = new DataStream($response, $ACTIVITY->DATASTREAM[0]);
    }
    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return DataSummary
     */
    public function getDataStream()
    {
        return $this->dataStream;
    }
}