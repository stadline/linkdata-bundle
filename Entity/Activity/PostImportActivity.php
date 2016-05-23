<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use Geonaute\LinkdataBundle\Entity\Common\Activity as BaseActivity;
use JMS\Serializer\Annotation as Serializer;

class PostImportActivity extends BaseActivity
{

    /**
     * @Serializer\SerializedName("ID")
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
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $deviceId;

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
     * @Serializer\SerializedName("DURATION")
     * @Serializer\Type("integer")
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
     * @Serializer\SerializedName("CREATEDAT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $createdAt;

    /**
     * @Serializer\SerializedName("UPDATETI%E")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $updateTime;

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
     * @return integer
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

}
