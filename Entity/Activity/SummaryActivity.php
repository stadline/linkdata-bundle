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
    private $userId;

    /**
     * @Serializer\SerializedName("SPORTID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $sportId;

    /**
     * @Serializer\SerializedName("DEVICEID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $deviceId;

    /**
     * @Serializer\SerializedName("CONNECTEDDEVICE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\ConnectedDevice")
     *
     * @var ConnectedDevice
     */
    private $device;

    /**
     * @Serializer\SerializedName("DEVICEMODELID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $deviceModelId;

    /**
     * @Serializer\SerializedName("STARTDATE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $startDate;

    /**
     * @Serializer\SerializedName("TIMEZONE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $timezone;

    /**
     * @Serializer\SerializedName("DURATION")
     * @Serializer\Type("string")
     *
     * @var integer
     */
    private $duration;

    /**
     * @Serializer\SerializedName("LIBELLE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $libelle;

    /**
     * @Serializer\SerializedName("COMMENT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $comment;

    /**
     * @Serializer\SerializedName("LATITUDE")
     * @Serializer\Type("double")
     *
     * @var float
     */
    private $latitude;

    /**
     * @Serializer\SerializedName("LONGITUDE")
     * @Serializer\Type("double")
     *
     * @var float
     */
    private $longitude;

    /**
     * @Serializer\SerializedName("ELEVATION")
     * @Serializer\Type("double")
     *
     * @var float
     */
    private $elevation;

    /**
     * @Serializer\SerializedName("TRACKID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $trackId;

    /**
     * @Serializer\SerializedName("TRACK")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Tracks\Track")
     *
     * @var Track
     */
    private $track;

    /**
     * @Serializer\SerializedName("SESSION_TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $sessionToken;

    /**
     * @Serializer\SerializedName("SHARE_TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $shareToken;

    /**
     * @Serializer\SerializedName("MANUAL")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    private $manual;

    /**
     * @Serializer\SerializedName("CREATEDAT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $createdAt;

    /**
     * @Serializer\SerializedName("UPDATETIME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $updateTime;

    /**
     * @Serializer\SerializedName("ABOUT")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Activity\About>")
     *
     * @var About
     */
    private $about;

    /**
     *
     * @Serializer\SerializedName("TAGS")
     * @Serializer\Type("array")
     *
     * @var array
     */
    private $tags = [];

    /**
     * @Serializer\SerializedName("DATASUMMARY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataSummary")
     *
     * @var DataSummary
     */
    private $summary;

    /**
     * @Serializer\SerializedName("DATASTREAM")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataStream")
     *
     * @var DataStream
     */
    private $dataStream;

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
     * @return ConnectedDevice
     */
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
    public function getSession()
    {
        throw new \Exception('cant do getClient !'); // Old method doing getClient (can't remove because is in the interface) @todo fix this
    }

}
