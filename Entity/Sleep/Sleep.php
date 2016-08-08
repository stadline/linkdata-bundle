<?php

namespace Geonaute\LinkdataBundle\Entity\Sleep;

use Geonaute\LinkdataBundle\Entity\Activity\DataStream;
use Geonaute\LinkdataBundle\Entity\Activity\DataSummary;
use JMS\Serializer\Annotation as Serializer;

class Sleep
{
    /**
     * @Serializer\SerializedName("TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $token;

    /**
     * @Serializer\SerializedName("USERID")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $userId;

    /**
     * @Serializer\SerializedName("BED_TIME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $bedTime;

    /**
     * @Serializer\SerializedName("WAKEUP_TIME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $wakeupTime;

    /**
     * @Serializer\SerializedName("TIMEZONE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $timezone;

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
    protected $updatedTime;

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
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getBedTime()
    {
        return $this->bedTime;
    }

    /**
     * @return string
     */
    public function getWakeupTime()
    {
        return $this->wakeupTime;
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
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getUpdatedTime()
    {
        return $this->updatedTime;
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
        return $this->dataStream;
    }
}
