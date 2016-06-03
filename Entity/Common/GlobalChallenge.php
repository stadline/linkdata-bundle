<?php

namespace Geonaute\LinkdataBundle\Entity\Common;

use DateTime;
use Geonaute\LinkdataBundle\Utils\GlobalChallengeWidgetObjectInterface;
use JMS\Serializer\Annotation as Serializer;

class GlobalChallenge implements GlobalChallengeWidgetObjectInterface
{

    /**
     * @Serializer\SerializedName("TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $token;

    /**
     * @Serializer\SerializedName("NAME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $name;

    /**
     * @Serializer\SerializedName("BEFORE_MESSAGE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $beforeMessage;

    /**
     * @Serializer\SerializedName("CURRENT_MESSAGE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $currentMessage;

    /**
     * @Serializer\SerializedName("AFTER_MESSAGE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $afterMessage;

    /**
     * @Serializer\SerializedName("PUBLISH_DATE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $publishDate;

    /**
     * @Serializer\SerializedName("STARTED_AT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $startedAt;

    /**
     * @Serializer\SerializedName("ENDED_AT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $endedAt;

    /**
     * @Serializer\SerializedName("RESULT")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $result;

    /**
     * @Serializer\SerializedName("TARGET")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $target;

    /**
     * @Serializer\SerializedName("TARGET_UNIT_ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $targetUnitId;

    /**
     * @Serializer\SerializedName("IMAGE_URL")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $imageUrl;

    /**
     * @Serializer\SerializedName("CURRENT")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    protected $current;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getBeforeMessage()
    {
        return $this->beforeMessage;
    }

    /**
     * @return string
     */
    public function getCurrentMessage()
    {
        return $this->currentMessage;
    }

    /**
     * @return string
     */
    public function getAfterMessage()
    {
        return $this->afterMessage;
    }

    /**
     * @return string
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * @return string
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @return DateTime
     */
    public function getStartedAtAsDateTimeObject()
    {
        return DateTime::createFromFormat('Y-m-d H:i:s', $this->startedAt);
    }

    /**
     * @return string
     */
    public function getEndedAt()
    {
        return $this->endedAt;
    }

    /**
     * @return DateTime
     */
    public function getEndedAtAsDateTimeObject()
    {
        return DateTime::createFromFormat('Y-m-d H:i:s', $this->endedAt);
    }

    /**
     * @return integer
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return integer
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @return float between 0 and 100
     */
    public function getProgress()
    {
        return 100 * $this->result / $this->target;
    }

    /**
     * @return integer
     */
    public function getTargetUnitId()
    {
        return $this->targetUnitId;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Returns challenge state (BEFORE / CURRENT / AFTER)
     *
     * @return integer
     */
    public function getState()
    {
        $now = new DateTime();
        $startedAt = $this->getStartedAtAsDateTimeObject();
        $endedAt = $this->getEndedAtAsDateTimeObject();

        if ($startedAt > $now) {
            return self::STATE_BEFORE;
        } elseif ($this->endedAt && $now >= $endedAt) {
            return self::STATE_AFTER;
        } else {
            return self::STATE_CURRENT;
        }
    }

    /**
     * @return boolean
     */
    public function getCurrent()
    {
        return $this->current;
    }

}
