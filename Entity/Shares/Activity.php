<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use DateTime;
use Geonaute\LinkdataBundle\Utils\ActivityWidgetProviderInterface;
use Geonaute\LinkdataBundle\Entity\Activity\DataStream;
use Geonaute\LinkdataBundle\Entity\Activity\DataSummary;
use Geonaute\LinkdataBundle\Entity\Reference\DeviceModel;
use Geonaute\LinkdataBundle\Entity\Reference\Sport;
use JMS\Serializer\Annotation as Serializer;

class Activity implements ActivityWidgetProviderInterface
{

    /**
     * @Serializer\SerializedName("USER")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\User")
     *
     * @var User
     */
    private $user;

    /**
     * @Serializer\SerializedName("SPORT")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Reference\Sport")
     *
     * @var Sport
     */
    private $sport;

    /**
     * @Serializer\SerializedName("DEVICEMODEL")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Reference\DeviceModel")
     *
     * @var DeviceModel
     */
    private $deviceModel;

    /**
     * @Serializer\SerializedName("DATASTREAM")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataStream")
     *
     * @var DataStream
     */
    private $dataStream;

    /**
     * @Serializer\SerializedName("DATASUMMARY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataSummary")
     *
     * @var DataSummary
     */
    private $dataSummary;

    /**
     * @Serializer\SerializedName("TRACK")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\Track")
     *
     * @var Track
     */
    private $track;

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
     * @Serializer\Type("integer")
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
     * @Serializer\SerializedName("ABOUT")
     * @Serializer\Type("?")
     *
     * @var About
     */
    private $about;

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
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return Sport
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * @return DeviceModel
     */
    public function getDeviceModel()
    {
        return $this->deviceModel;
    }

    /**
     * @return DataStream
     */
    public function getDataStream()
    {
        return $this->dataStream;
    }

    /**
     * @return DataSummary
     */
    public function getDataSummary()
    {
        return $this->dataSummary;
    }

    /**
     * @return Track
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Cannot use the About from Linkdata so we have to build it again
     *
     * @param $key
     * @return mixed
     */
    public function getAbout($key)
    {
        if (array_key_exists($key, $this->about)) {
            return $this->about[$key];
        } else {
            return false;
        }
    }

    /**
     * @return integer
     */
    public function getDeviceModelId()
    {
        return $this->getDeviceModel()->getId();
    }

    /**
     * @return boolean
     */
    public function getTrackId()
    {
        return ($this->track) ? true : false;
    }

    /**
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
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
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getElevation()
    {
        return $this->elevation;
    }

}
