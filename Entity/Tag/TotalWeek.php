<?php

namespace Geonaute\LinkdataBundle\Entity\Tag;

use Geonaute\LinkdataBundle\Utils\Datatype;
use JMS\Serializer\Annotation as Serializer;

class TotalWeek
{

    /**
     * @Serializer\SerializedName("TOTALUSERS")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $totalUsers;

    /**
     * @return integer
     */
    public function getTotalUsers()
    {
        return $this->totalUsers;
    }

    /**
     * Sum values for a datatype on the week
     *
     * @param integer $unitId
     * @return integer
     */
    private function getTotal($unitId)
    {
        $total = 0;

        foreach ($this->xml->xpath('.//DATATYPE[@id="' . $unitId . '"]') as $node) {
            $total += (int) $node;
        }

        return $total;
    }

    /**
     * @return integer
     */
    public function getTotalPoints()
    {
        return $this->getTotal(Datatype::POINTS_EARNED);
    }

    /**
     * Returns distance unit id
     *
     * @return integer
     */
    public function getDistanceId()
    {
        return Datatype::DISTANCE;
    }

    /**
     * Returns total distance on a week
     *
     * @return integer
     */
    public function getTotalDistance()
    {
        return $this->getTotal($this->getDistanceId());
    }

    /**
     * Returns total steps on a week
     *
     * @return integer
     */
    public function getTotalSteps()
    {
        return $this->getTotal(Datatype::STEP_NUMBER);
    }

    /**
     * Returns calories unit id
     *
     * @return integer
     */
    public function getCaloriesId()
    {
        return Datatype::CALORIES_BURNT;
    }

    /**
     * Returns total calories burnt on a week
     *
     * @return integer
     */
    public function getTotalCalories()
    {
        return $this->getTotal($this->getCaloriesId());
    }

    /**
     * Returns duration unit id
     *
     * @return integer
     */
    public function getDurationId()
    {
        return Datatype::DURATION;
    }

    /**
     * Returns speed unit id
     *
     * @return integer
     */
    public function getSpeedId()
    {
        return Datatype::SPEED_AVG;
    }

    /**
     * Returns total duration on a week
     *
     * @return integer
     */
    public function getTotalDuration()
    {
        return $this->getTotal($this->getDurationId());
    }

    /**
     * Get the average Value for one datatype
     *
     * @param integer $unitId
     * @return integer
     */
    public function getAverage($unitId)
    {
        if ($this->getTotalUsers() > 0) {
            return round($this->getTotal($unitId) / $this->getTotalUsers());
        } else {
            return 0;
        }
    }

}
