<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Geonaute\LinkdataBundle\Entity\Shares\Share as BaseShare;
use JMS\Serializer\Annotation as Serializer;

class SharesShare extends BaseShare
{

    /**
     * @Serializer\SerializedName("TYPE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $type;

    /**
     * @Serializer\SerializedName("LEVEL")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $level;

    /**
     * @Serializer\SerializedName("GLOBALCHALLENGE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\GlobalChallenge")
     *
     * @var GlobalChallenge
     */
    protected $globalChallenge;

    /**
     * @Serializer\SerializedName("CHALLENGE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\Challenge")
     *
     * @var Challenge
     */
    protected $challenge;

    /**
     * @Serializer\SerializedName("ACTIVITY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\Activity")
     *
     * @var Activity
     */
    protected $activity;

    /**
     * @Serializer\SerializedName("STATISTICS")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\Statistics")
     *
     * @var Statistics
     */
    protected $statistics;

    /**
     * @Serializer\SerializedName("USER")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\User")
     *
     * @var User
     */
    protected $user;

    /**
     * @Serializer\PostDeserialize
     */
    public function defineShareActivityUserLevelForDeserialization()
    {
        if ($this->getUser() instanceof User) {
            $this->getUser()->setLevel($this->getLevel());
        }
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return GlobalChallenge
     */
    public function getGlobalChallenge()
    {
        return $this->globalChallenge;
    }

    /**
     * @return Challenge
     */
    public function getChallenge()
    {
        return $this->challenge;
    }

    /**
     * @return Activity
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @return Statistics
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}
