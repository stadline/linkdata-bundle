<?php

namespace Geonaute\LinkdataBundle\Entity\Shares;

use Share as BaseShare;
use JMS\Serializer\Annotation as Serializer;

class SharesShare extends BaseShare
{

    /**
     * @Serializer\SerializedName("TYPE")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $type;

    /**
     * @Serializer\SerializedName("LEVEL")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $level;

    /**
     * @Serializer\SerializedName("GLOBALCHALLENGE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\GlobalChallenge")
     *
     * @var GlobalChallenge
     */
    private $globalChallenge;

    /**
     * @Serializer\SerializedName("CHALLENGE")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\Challenge")
     *
     * @var Challenge
     */
    private $challenge;

    /**
     * @Serializer\SerializedName("ACTIVITY")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\Activity")
     *
     * @var Activity
     */
    private $activity;

    /**
     * @Serializer\SerializedName("STATISTICS")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Shares\Statistics")
     *
     * @var Statistics
     */
    private $statistics;

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

}
