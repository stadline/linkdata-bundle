<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersGlobalChallenge;

use JMS\Serializer\Annotation as Serializer;

class GlobalChallenge
{

    const STATE_BEFORE = -1;
    const STATE_CURRENT = 0;
    const STATE_AFTER = 1;

    /**
     * @Serializer\SerializedName("TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $token;

    /**
     * @Serializer\SerializedName("NAME")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $name;

    /**
     * @Serializer\SerializedName("BEFORE_MESSAGE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $beforeMessage;

    /**
     * @Serializer\SerializedName("CURRENT_MESSAGE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $currentMessage;

    /**
     * @Serializer\SerializedName("AFTER_MESSAGE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $afterMessage;

    /**
     * @Serializer\SerializedName("PUBLISH_DATE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $publishDate;

    /**
     * @Serializer\SerializedName("STARTED_AT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $startedAt;

    /**
     * @Serializer\SerializedName("ENDED_AT")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $endedAt;

    /**
     * @Serializer\SerializedName("RESULT")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $result;

    /**
     * @Serializer\SerializedName("TARGET")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $target;

    /**
     * @Serializer\SerializedName("TARGET_UNIT_ID")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $targetUnitId;

    /**
     * @Serializer\SerializedName("CURRENT")
     * @Serializer\Type("boolean")
     *
     * @var boolean
     */
    private $current;

    /**
     * @Serializer\SerializedName("IMAGE_URL")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $imageUrl;

    /**
     * @Serializer\SerializedName("AVERAGE_CONTRIBUTION")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $averageContribution;

    /**
     * @Serializer\SerializedName("USER_CONTRIBUTION")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $userContribution;

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
     * @return \DateTime
     */
    public function getStartedAtAsDateTimeObject()
    {
        return \DateTime::createFromFormat('Y-m-d H:i:s', $this->startedAt);
    }

    /**
     * @return string
     */
    public function getEndedAt()
    {
        return $this->endedAt;
    }

    /**
     * @return \DateTime
     */
    public function getEndedAtAsDateTimeObject()
    {
        return \DateTime::createFromFormat('Y-m-d H:i:s', $this->endedAt);
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
     * @return \Geonaute\Module\LinkdataBundle\Service\GetReferenceDatatypes\Datatype
     */
    public function getTargetUnit()
    {
        $client = $this->response->getClient();
        $response = $client->getReferenceDatatypes();

        return $response->getDatatypes()->offsetGet($this->targetUnitId);
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
        $now = new \DateTime();
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

    /**
     * @return integer
     */
    public function getAverageContribution()
    {
        return $this->averageContribution;
    }

    /**
     * @return integer
     */
    public function getUserContribution()
    {
        return $this->userContribution;
    }

}
