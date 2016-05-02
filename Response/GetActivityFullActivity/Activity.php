<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityFullActivity;

use DateTime;
use Geonaute\LinkdataBundle\Response\Common\ActivityWidgetProviderInterface;
use Geonaute\LinkdataBundle\Response\GetActivityDataStreams\DataStream;
use Geonaute\LinkdataBundle\Response\GetActivityDataSummary\DataSummary;
use Geonaute\LinkdataBundle\Response\GetActivitySummary\About;
use Geonaute\LinkdataBundle\Response\GetTracksDetails\Track;
use Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices\ConnectedDevice;
use Geonaute\LinkdataBundle\Utils\Activity as UtilsActivity;
use Geonaute\LinkdataBundle\Utils\ActivityToStringInterface;
use Geonaute\LinkdataBundle\Utils\Datatype;
use Symfony\Component\HttpFoundation\Session\Session;
use JMS\Serializer\Annotation as Serializer;

class Activity implements ActivityToStringInterface, ActivityWidgetProviderInterface
{
    /**
     * @Serializer\SerializedName("ID")
     * @Serializer\Type("string")
     * @var integer
     */
    private $id;

    /**
     * @Serializer\SerializedName("USERID")
     * @Serializer\Type("string")
     * @var integer
     */
    private $userId;

    /**
     * @Serializer\SerializedName("SPORTID")
     * @Serializer\Type("string")
     * @var integer
     */
    private $sportId;

    /**
     * @Serializer\SerializedName("DEVICEID")
     * @Serializer\Type("string")
     * @var integer
     */
    private $deviceId;

    /**
     * @Serializer\SerializedName("CONNECTEDDEVICE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersConnectedDevices\ConnectedDevice")
     *
     * @var ConnectedDevice
     */
    private $device;

    /**
     * @Serializer\SerializedName("DEVICEMODELID")
     * @Serializer\Type("string")
     * @var integer
     */
    private $deviceModelId;

    /**
     * @Serializer\SerializedName("STARTDATE")
     * @Serializer\Type("string")
     * @var string
     */
    private $startDate;

    /**
     * @Serializer\SerializedName("TIMEZONE")
     * @Serializer\Type("string")
     * @var string
     */
    private $timezone;

    /**
     * @Serializer\SerializedName("DURATION")
     * @Serializer\Type("string")
     * @var integer
     */
    private $duration;

    /**
     * @Serializer\SerializedName("LIBELLE")
     * @Serializer\Type("string")
     * @var string
     */
    private $libelle;

    /**
     * @Serializer\SerializedName("COMMENT")
     * @Serializer\Type("string")
     * @var string
     */
    private $comment;

    /**
     * @Serializer\SerializedName("LATITUDE")
     * @Serializer\Type("float")
     * @var float
     */
    private $latitude;

    /**
     * @Serializer\SerializedName("LONGITUDE")
     * @Serializer\Type("float")
     * @var float
     */
    private $longitude;

    /**
     * @Serializer\SerializedName("ELEVATION")
     * @Serializer\Type("string")
     * @var integer
     */
    private $elevation;

    /**
     * @Serializer\SerializedName("TRACKID")
     * @Serializer\Type("string")
     * @var integer
     */
    private $trackId;

    /**
     * @Serializer\SerializedName("TRACK")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetTracksDetails\Track")
     *
     * @var Track
     */
    private $track;

    /**
     * @Serializer\SerializedName("SESSION_TOKEN")
     * @Serializer\Type("string")
     * @var string
     */
    private $sessionToken;

    /**
     * @Serializer\SerializedName("SHARE_TOKEN")
     * @Serializer\Type("string")
     * @var string
     */
    private $shareToken;

    /**
     * @Serializer\SerializedName("MANUAL")
     * @Serializer\Type("string")
     * @var integer
     */
    private $manual;

    /**
     * @Serializer\SerializedName("CREATEDAT")
     * @Serializer\Type("string")
     * @var string
     */
    private $createdAt;

    /**
     * @Serializer\SerializedName("UPDATETIME")
     * @Serializer\Type("string")
     * @var string
     */
    private $updateTime;

    /**
     * @Serializer\SerializedName("ABOUT")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetActivitySummary\About")
     *
     * @var About
     */
    private $about;

    /**
     *
     * @Serializer\SerializedName("TAGS")
     * @Serializer\Type("array")
     * @var array
     */
    private $tags = array();

    /**
     * @Serializer\SerializedName("DATASUMMARY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetActivityDataSummary\DataSummary")
     *
     * @var DataSummary
     */
    private $summary;

    /**
     * @Serializer\SerializedName("DATASTREAM")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetActivityDataStreams\DataStream")
     *
     * @var DataStream
     */
    private $datastream;

    public function __toString()
    {
        return UtilsActivity::getNormalisedLibelle($this);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return int
     */
    public function getSportId()
    {
        return $this->sportId;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @return int
     */
    public function getDeviceModelId()
    {
        return $this->deviceModelId;
    }

    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return DateTime
     */
    public function getStartDateObject()
    {
        return DateTime::createFromFormat('Y-m-d H:i:s', $this->getStartDate());
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @return float
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * @return string
     */
    public function getTrackId()
    {
        return $this->trackId;
    }

    /**
     * @return string
     */
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

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
        return $this->datastream;
    }

    public function getTrack()
    {
        return $this->track;
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

    /**
     * @return string
     */
    public function getShareToken()
    {
        return $this->shareToken;
    }

    /**
     * @return boolean
     */
    public function getManual()
    {
        return $this->manual;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * @param null $key
     * @return About
     */
    public function getAbout($key = null)
    {
        return $this->about;
    }
}