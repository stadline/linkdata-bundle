<?php

namespace Geonaute\LinkdataBundle\Entity\Community;

use JMS\Serializer\Annotation as Serializer;

class Ranking
{
    /**
     * @Serializer\SerializedName("period")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $period;

    /**
     * @Serializer\SerializedName("activeUsers")
     * @Serializer\Type("integer")
     *
     * @var string
     */
    protected $activeUsers;

    /**
     * @Serializer\SerializedName("position")
     * @Serializer\Type("integer")
     *
     * @var string
     */
    protected $position;

    /**
     * @Serializer\SerializedName("previousPosition")
     * @Serializer\Type("integer")
     *
     * @var string
     */
    protected $previousPosition;

    /**
     * @Serializer\SerializedName("ldid")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $ldid;

    /**
     * @Serializer\SerializedName("ons")
     * @Serializer\Type("integer")
     *
     * @var string
     */
    protected $ons;

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @return string
     */
    public function getActiveUsers()
    {
        return $this->activeUsers;
    }

    /**
     * @param string $activeUsers
     */
    public function setActiveUsers($activeUsers)
    {
        $this->activeUsers = $activeUsers;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getPreviousPosition()
    {
        return $this->previousPosition;
    }

    /**
     * @param string $previousPosition
     */
    public function setPreviousPosition($previousPosition)
    {
        $this->previousPosition = $previousPosition;
    }

    /**
     * @return string
     */
    public function getLdid()
    {
        return $this->ldid;
    }

    /**
     * @param string $ldid
     */
    public function setLdid($ldid)
    {
        $this->ldid = $ldid;
    }

    /**
     * @return string
     */
    public function getOns()
    {
        return $this->ons;
    }

    /**
     * @param string $ons
     */
    public function setOns($ons)
    {
        $this->ons = $ons;
    }
}
