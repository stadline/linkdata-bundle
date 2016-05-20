<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Utils\Datatype;
use Geonaute\LinkdataBundle\Utils\Level;
use Geonaute\LinkdataBundle\Entity\Users\TotalProfileUser;
use JMS\Serializer\Annotation as Serializer;

class Profile
{

    /**
     * @Serializer\SerializedName("USER")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Users\TotalProfileUser")
     *
     * @var TotalProfileUser
     */
    protected $user;

    /**
     * @Serializer\SerializedName("SPORTS")
     * @Serializer\XmlList(entry = "SPORTID")
     * @Serializer\Type("array<integer>")
     *
     * @var array
     */
    protected $sportIds = [];

    /**
     * @Serializer\SerializedName("TOTALS")
     * @Serializer\XmlMap(entry = "TOTAL_DATATYPE", keyAttribute = "datatype_id")
     * @Serializer\Type("array<integer, integer>")
     *
     * @var array
     */
    protected $totals = [];

    /**
     * @return TotalProfileUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return array
     */
    public function getSportIds()
    {
        return $this->sportIds;
    }

    /**
     * @return integer
     */
    public function getDistanceId()
    {
        return Datatype::DISTANCE;
    }

    /**
     * @return integer
     */
    public function getTotalDistance()
    {
        if (array_key_exists($this->getDistanceId(), $this->totals)) {
            return $this->totals[$this->getDistanceId()];
        } else {
            return 0;
        }
    }

    /**
     * @return integer
     */
    public function getActivityNumberId()
    {
        return Datatype::ACTIVITY_NUMBER;
    }

    /**
     * @return integer
     */
    public function getTotalActivities()
    {
        if (array_key_exists($this->getActivityNumberId(), $this->totals)) {
            return $this->totals[$this->getActivityNumberId()];
        } else {
            return 0;
        }
    }

    /**
     * @return integer
     */
    public function getPointsEarnedId()
    {
        return Datatype::POINTS_EARNED;
    }

    /**
     * @return integer
     */
    public function getTotalOns()
    {
        if (array_key_exists($this->getPointsEarnedId(), $this->totals)) {
            return $this->totals[$this->getPointsEarnedId()];
        } else {
            return 0;
        }
    }

    /**
     * @return integer
     */
    public function getLevel()
    {
        $score = $this->getTotalOns();
        return Level::getLevelFromPointEarned($score);
    }

    /**
     * @return integer
     */
    public function getDurationId()
    {
        return Datatype::DURATION;
    }

    /**
     * @return integer
     */
    public function getTotalDurations()
    {
        if (array_key_exists($this->getDurationId(), $this->totals)) {
            return $this->totals[$this->getDurationId()];
        } else {
            return 0;
        }
    }

}
