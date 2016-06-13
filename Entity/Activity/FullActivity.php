<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use Geonaute\LinkdataBundle\Entity\Tracks\Track;
use Geonaute\LinkdataBundle\Entity\Users\ConnectedDevice;
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
     * @Serializer\SerializedName("DATASTREAM")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataStream")
     *
     * @var DataStream
     */
    protected $dataStream;

    /**
     * @Serializer\SerializedName("TRACK")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Tracks\Track")
     *
     * @var Track
     */
    protected $track;

    /**
     * @Serializer\SerializedName("CONNECTEDDEVICE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\ConnectedDevice")
     *
     * @var ConnectedDevice
     */
    protected $device;

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
     * @return Track
     */
    public function getDevice()
    {
        return $this->device;
    }
}
