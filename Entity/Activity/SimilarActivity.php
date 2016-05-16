<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use DateTime;
use Geonaute\LinkdataBundle\Entity\Common\Activity as BaseActivity;
use Geonaute\LinkdataBundle\Utils\Activity as UtilsActivity;
use Geonaute\LinkdataBundle\Utils\ActivityToStringInterface;
use Geonaute\LinkdataBundle\Entity\Activity\DataSummary;
use JMS\Serializer\Annotation as Serializer;

class Activity extends BaseActivity implements ActivityToStringInterface
{

    /**
     * @Serializer\SerializedName("SPORTID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $sportId;

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
     * @Serializer\SerializedName("CREATEDAT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $createdAt;

    /**
     * @Serializer\SerializedName("DATASUMMARY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\DataSummary")
     *
     * @var DataSummary
     */
    private $dataSummary;

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
