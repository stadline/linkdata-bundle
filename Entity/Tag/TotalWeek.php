<?php

namespace Geonaute\LinkdataBundle\Entity\Tag;

use Geonaute\LinkdataBundle\Utils\Datatype as UtilsDatatype;
use JMS\Serializer\Annotation as Serializer;

class TotalWeek
{
    /**
     * @Serializer\SerializedName("TOTALUSERS")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $totalUsers;


    /**
     * @Serializer\SerializedName("DATATYPES")
     * @Serializer\XmlMap(entry = "DATATYPE", keyAttribute="id")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Tag\Datatype>")
     *
     * @var array<Datatype>
     */
    protected $datatypes;

    /**
     * @return array<Datatype>
     */
    public function getDatatypes()
    {
        return $this->datatypes;
    }

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
    protected function getTotal($unitId)
    {
        $total = 0;
        foreach($this->getDatatypes() as $datatypeUnit => $datatype) {
            if ($datatypeUnit !== $unitId) {
                continue;
            }
            $total += $datatype->getValue();
        }
        return $total;
    }

    /**
     * @return integer
     */
    public function getTotalPoints()
    {
        return $this->getTotal(UtilsDatatype::POINTS_EARNED);
    }

    /**
     * Returns distance unit id
     *
     * @return integer
     */
    public function getDistanceId()
    {
        return UtilsDatatype::DISTANCE;
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
        return $this->getTotal(UtilsDatatype::STEP_NUMBER);
    }

    /**
     * Returns calories unit id
     *
     * @return integer
     */
    public function getCaloriesId()
    {
        return UtilsDatatype::CALORIES_BURNT;
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
        return UtilsDatatype::DURATION;
    }

    /**
     * Returns speed unit id
     *
     * @return integer
     */
    public function getSpeedId()
    {
        return UtilsDatatype::SPEED_AVG;
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
