<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use DateTime;
use Geonaute\LinkdataBundle\Entity\Common\Activity as BaseActivity;
use Geonaute\LinkdataBundle\Entity\Activity\About;
use Geonaute\LinkdataBundle\Entity\Users\DataSummary;
use Geonaute\LinkdataBundle\Entity\Users\Tag;
use Geonaute\LinkdataBundle\Utils\Activity as UtilsActivity;
use Geonaute\LinkdataBundle\Utils\ActivityToStringInterface;
use JMS\Serializer\Annotation as Serializer;

class Activity extends BaseActivity implements ActivityToStringInterface
{

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
     * @Serializer\SerializedName("SPORTID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $sportId;

    /**
     * @Serializer\SerializedName("LIBELLE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $libelle;

    /**
     * @Serializer\SerializedName("MANUAL")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    private $manual;

    /**
     * @Serializer\SerializedName("DEVICE_MODEL_ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $deviceModelId;

    /**
     * @Serializer\SerializedName("CREATED_AT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $createdAt;

    /**
     * @Serializer\SerializedName("DATASUMMARY")
     * @Serializer\Type("ArrayCollection<Geonaute\LinkdataBundle\Entity\Users\DataSummary>")
     *
     * @var array<DataSummary>
     */
    private $dataSummaries;

    /**
     * @Serializer\SerializedName("ABOUT")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Activity\About")
     *
     * @var About
     */
    private $about;

    /**
     * @Serializer\SerializedName("TAGS")
     * @Serializer\XmlList(entry = "TAG")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Entity\Users\Tag>")
     *
     * @var array<Tag>
     */
    private $tags = [];

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
     * @throws \Exception
     */
    public function getSport()
    {
        throw new \Exception('cant do getClient !'); // Old method doing getClient (can't remove because is in the interface) @todo fix this
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @return boolean
     */
    public function getManual()
    {
        return $this->manual;
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
     * @param type $key
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
     * @return array<DataSummary>
     */
    public function getDataSummaries()
    {
        return $this->dataSummaries;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

}
