<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use DateTime;
use Geonaute\LinkdataBundle\Entity\Common\Activity as BaseActivity;
use Geonaute\LinkdataBundle\Entity\Activity\DataStream;
use Geonaute\LinkdataBundle\Entity\Tracks\Track;
use Geonaute\LinkdataBundle\Entity\Users\ConnectedDevice;
use Geonaute\LinkdataBundle\Utils\Activity as UtilsActivity;
use Geonaute\LinkdataBundle\Utils\ActivityToStringInterface;
use Geonaute\LinkdataBundle\Utils\ActivityWidgetProviderInterface;
use Geonaute\LinkdataBundle\Utils\Datatype;
use JMS\Serializer\Annotation as Serializer;

class SummaryActivity extends BaseActivity implements ActivityToStringInterface, ActivityWidgetProviderInterface
{

    /**
     * @Serializer\SerializedName("USERID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $userId;

    /**
     * @Serializer\SerializedName("SPORTID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $sportId;

    /**
     * @Serializer\SerializedName("DEVICEID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $deviceId;

    /**
     * @Serializer\SerializedName("CONNECTEDDEVICE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\ConnectedDevice")
     *
     * @var ConnectedDevice
     */
    protected $device;

    /**
     * @Serializer\SerializedName("DEVICEMODELID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $deviceModelId;

    /**
     * @Serializer\SerializedName("STARTDATE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $startDate;

    /**
     * @Serializer\SerializedName("TIMEZONE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $timezone;

    /**
     * @Serializer\SerializedName("DURATION")
     * @Serializer\Type("string")
     *
     * @var integer
     */
    protected $duration;

    /**
     * @Serializer\SerializedName("LIBELLE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $libelle;

    /**
     * @Serializer\SerializedName("COMMENT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $comment;

    /**
     * @Serializer\SerializedName("LATITUDE")
     * @Serializer\Type("double")
     *
     * @var float
     */
    protected $latitude;

    /**
     * @Serializer\SerializedName("LONGITUDE")
     * @Serializer\Type("double")
     *
     * @var float
     */
    protected $longitude;

    /**
     * @Serializer\SerializedName("ELEVATION")
     * @Serializer\Type("double")
     *
     * @var float
     */
    protected $elevation;

    /**
     * @Serializer\SerializedName("TRACKID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $trackId;

    /**
     * @Serializer\SerializedName("TRACK")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Tracks\Track")
     *
     * @var Track
     */
    protected $track;

    /**
     * @Serializer\SerializedName("SESSION_TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $sessionToken;

    /**
     * @Serializer\SerializedName("SHARE_TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $shareToken;

    /**
     * @Serializer\SerializedName("MANUAL")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    protected $manual;

    /**
     * @Serializer\SerializedName("CREATEDAT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $createdAt;

    /**
     * @Serializer\SerializedName("UPDATETIME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $updateTime;

    /**
     * @Serializer\SerializedName("ABOUT")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\About")
     *
     * @var About
     */
    protected $about;

    /**
     *
     * @Serializer\SerializedName("TAGS")
     * @Serializer\XmlList(entry = "TAG")
     * @Serializer\Type("array<string>")
     *
     * @var array
     */
    protected $tags = [];

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
     * @return string
     */
    public function __toString()
    {
        return UtilsActivity::getNormalisedLibelle($this);
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return integer
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
     * @return integer
     */
    public function getDeviceModelId()
    {
        return $this->deviceModelId;
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
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
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
     * @return integer
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
     * @return mixed
     */
    public function getAbout($key = null)
    {
        // return null if about is undefined
        if (!$this->about) {
            return null;
        }

        // return requested value
        if ($key) {
            return $this->about->offsetGet($key);
        } else {
            return $this->about;
        }
    }

    /**
     * @throws \Exception
     */
    public function getDevice()
    {
        throw new \Exception('cant do getClient !'); // Old method doing getClient (can't remove because is in the interface) @todo fix this
    }

    /**
     * @throws \Exception
     */
    public function getSummary()
    {
        throw new \Exception('cant do getClient !'); // Old method doing getClient (can't remove because is in the interface) @todo fix this
    }

    /**
     * @throws \Exception
     */
    public function getDataStream()
    {
        throw new \Exception('cant do getClient !'); // Old method doing getClient (can't remove because is in the interface) @todo fix this
    }

    /**
     * @throws \Exception
     */
    public function getTrack()
    {
        throw new \Exception('cant do getClient !'); // Old method doing getClient (can't remove because is in the interface) @todo fix this
    }

    /**
     * @throws \Exception
     */
    public function getSession()
    {
        throw new \Exception('cant do getClient !'); // Old method doing getClient (can't remove because is in the interface) @todo fix this
    }

}