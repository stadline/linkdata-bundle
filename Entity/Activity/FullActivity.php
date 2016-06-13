<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use Geonaute\LinkdataBundle\Entity\Tracks\Track;
use JMS\Serializer\Annotation as Serializer;

class FullActivity extends SummaryActivity
{
    /**
     * @Serializer\SerializedName("DATASUMMARY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataSummary")
     *
     * @var DataSummary
     */
    protected $summary;

    /**
     * @return DataSummary
     */
    public function getSummary()
    {
        die("getMySy");
        return $this->summary;
    }

    /**
     * @Serializer\SerializedName("DATASTREAM")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataStream")
     *
     * @var DataStream
     */
    protected $dataStream;

    /**
     * @return DataStream
     */
    public function getDataStream()
    {
        return $this->dataStream;
    }

    /**
     * @Serializer\SerializedName("TRACK")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Tracks\Track")
     *
     * @var Track
     */
    protected $track;

    /**
     * @return Track
     */
    public function getTrack()
    {
        return $this->track;
    }
}
