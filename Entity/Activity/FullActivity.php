<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

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
     * @return mixed
     */
    public function getHashXml()
    {
        // return md5($this->xml->saveXML()); @todo change this
    }

}
