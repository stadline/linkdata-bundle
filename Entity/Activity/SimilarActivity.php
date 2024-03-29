<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use DateTime;
use Geonaute\LinkdataBundle\Entity\Common\Activity as BaseActivity;
use Geonaute\LinkdataBundle\Utils\Activity as UtilsActivity;
use Geonaute\LinkdataBundle\Utils\ActivityToStringInterface;
use JMS\Serializer\Annotation as Serializer;

class SimilarActivity extends BaseActivity implements ActivityToStringInterface
{
    /**
     * @Serializer\SerializedName("SPORTID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $sportId;

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
     * @Serializer\SerializedName("CREATEDAT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $createdAt;

    /**
     * @Serializer\SerializedName("DATASUMMARY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataSummary")
     *
     * @var DataSummary
     */
    protected $dataSummary;

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
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return DateTime
     */
    public function getStartDateObject()
    {
        return DateTime::createFromFormat('Y-m-d H:i:s', $this->startDate);
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->getEndDateObject()->format('Y-m-d H:i:s');
    }

    /**
     * @return DateTime
     */
    public function getEndDateObject()
    {
        $duration = 0; // in seconds

        $startDateObject = $this->getStartDateObject();
        $endDateObject = $startDateObject->modify("+$duration seconds");

        return $endDateObject;
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
    public function getLibelle()
    {
        return $this->libelle;
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
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude ? : null;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude ? : null;
    }

    /**
     * @return DataSummary
     */
    public function getDataSummary()
    {
        return $this->dataSummary;
    }
}
