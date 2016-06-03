<?php

namespace Geonaute\LinkdataBundle\Decorator;

use Geonaute\LinkdataBundle\Entity\Activity\DataStream;
use Geonaute\LinkdataBundle\Entity\Activity\DataSummary;
use Geonaute\LinkdataBundle\Entity\Reference\Session;
use Geonaute\LinkdataBundle\Entity\Tracks\Track;
use Geonaute\LinkdataBundle\Entity\Users\ConnectedDevice;
use Geonaute\LinkdataBundle\Utils\Datatype;
use JMS\Serializer\Annotation as Serializer;

trait HydratableSummaryActivityTrait
{
    use HydratableTrait;

    /**
     * @Serializer\Exclude()
     * @var DataSummary
     */
    protected $summary;

    /**
     * @Serializer\Exclude()
     * @var ConnectedDevice
     */
    protected $device;

    /**
     * @Serializer\Exclude()
     * @var Session
     */
    protected $session;

    /**
     * @Serializer\Exclude()
     * @var Track
     */
    protected $track;
    /**
     * @Serializer\Exclude()
     * @var DataStream
     */
    protected $dataStream;

    /**
     * @return string
     */
    public function getDataStreamId()
    {
        return $this->getId();
    }

    /**
     * @return $this
     */
    public function getSummaryId()
    {
        return $this;
    }

    /**
     * @throws \Exception
     */
    public function getSummary()
    {
        if ($this->summary === null) {
            $this->getHydrator()->hydrateSummaryActivityDataSummary($this);
        }
        return $this->summary;
    }

    /**
     * @param DataSummary $activityDataSummary
     */
    public function setSummary(DataSummary $activityDataSummary)
    {
        $this->summary = $activityDataSummary;
    }


    /**
     * @throws \Exception
     */
    public function getDevice()
    {
        if ($this->device === null) {
            $this->getHydrator()->hydrateSummaryActivityConnectedDevice($this);
        }
        return $this->device;
    }

    /**
     * @param ConnectedDevice $device
     */
    public function setDevice(ConnectedDevice $device)
    {
        $this->device = $device;
    }

    /**
     * @throws \Exception
     */
    public function getDataStream()
    {
        if ($this->dataStream === null) {
            $this->getHydrator()->hydrateSummaryActivityDataStream($this);
        }
        return $this->dataStream;
    }

    /**
     * @param DataStream $dataStream
     */
    public function setDataStream(DataStream $dataStream)
    {
        $this->dataStream = $dataStream;
    }

    /**
     * @throws \Exception
     */
    public function getTrack()
    {
        if ($this->track === null) {
            $this->getHydrator()->hydrateSummaryActivityTrack($this);
        }
        return $this->track;
    }

    /**
     * @param Track $track
     */
    public function setTrack(Track $track)
    {
        $this->track = $track;
    }

    /**
     * @throws \Exception
     */
    public function getSession()
    {
        if ($this->session === null) {
            $this->getHydrator()->hydrateSummaryActivitySession($this);
        }
        return $this->session;
    }

    /**
     * @param Session $session
     */
    public function setSession(Session $session)
    {
        $this->session = $session;
    }

    /**
     * @return integer
     */
    public function getDistance()
    {
        return (int) (string) $this->getSummary()->getValue(Datatype::DISTANCE);
    }

    /**
     * @return integer
     */
    public function getCalories()
    {
        return (int) (string) $this->getSummary()->getValue(Datatype::CALORIES_BURNT);
    }

    /**
     * @return integer
     */
    public function getHeartRate()
    {
        return (string) $this->getSummary()->getValue(Datatype::HR_AVG);
    }

    /**
     * @return integer
     */
    public function getStepNumber()
    {
        return (int) (string) $this->getSummary()->getValue(Datatype::STEP_NUMBER);
    }

    /**
     * @return integer
     */
    public function getActiveTime()
    {
        return (string) $this->getSummary()->getValue(Datatype::ACTIVE_TIME);
    }

}