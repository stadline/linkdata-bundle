<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use Geonaute\LinkdataBundle\Entity\Tracks\Track;
use JMS\Serializer\Annotation as Serializer;

class FullActivity extends SummaryActivity
{

    /**
     * @return DataSummary
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @return DataStream
     */
    public function getDataStream()
    {
        return $this->dataStream;

    }

    /**
     * @return Track
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @return null
     */
    public function getHashXml()
    {
        return null; // added
        // return md5($this->xml->saveXML()); @todo change this
    }

}
