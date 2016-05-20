<?php

namespace Geonaute\LinkdataBundle\Entity\Tag;

use Geonaute\LinkdataBundle\Utils\ProgressStatisticMapperInterface;
use Geonaute\LinkdataBundle\Utils\Datatype;
use JMS\Serializer\Annotation as Serializer;

class TotalYear implements ProgressStatisticMapperInterface
{

    /**
     * @Serializer\SerializedName("TOTALPOINTS")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $totalPoints;

    /**
     * @Serializer\SerializedName("TOTALUSERS")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $totalUsers;

    /**
     * @Serializer\SerializedName("TOTALACTIVITIES")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $totalActivities;

    /**
     * @Serializer\SerializedName("TOTALACTIVITIES")
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $year;

    /**
     * @Serializer\SerializedName("SPORTS")
     * @Serializer\XmlMap(entry="SPORT", keyAttribute = "id")
     * @Serializer\Type("ArrayCollection<string, Geonaute\LinkdataBundle\Entity\Tag\Sport>")
     *
     * @var Sports
     */
    protected $sports;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getYear();
    }

    /**
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return integer
     */
    public function getTotalPoints()
    {
        return $this->totalPoints;
    }

    /**
     * @return integer
     */
    public function getTotalUsers()
    {
        return $this->totalUsers;
    }

    /**
     * @return integer
     */
    public function getTotalActivities()
    {
        return $this->totalActivities;
    }

    /**
     * Sum values for a datatype on the year
     *
     * @param integer $unitId
     * @return integer
     */
    protected function getTotal($unitId)
    {
        $total = 0;

        foreach ($this->xml->xpath('.//VALUE[@id="' . $unitId . '"]') as $node) {
            $total += (string) $node;
        }

        return $total;
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
     * Returns total distance on a year
     *
     * @return integer
     */
    public function getTotalDistance()
    {
        return $this->getTotal($this->getDistanceId());
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
     * Returns total calories burnt on a year
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
     * Returns total duration on a year
     *
     * @return integer
     */
    public function getTotalDuration()
    {
        return $this->getTotal($this->getDurationId());
    }

    /**
     * Returns total step number
     *
     * @return integer
     */
    public function getTotalSteps()
    {
        return $this->getTotal(Datatype::STEP_NUMBER);
    }

    /**
     * Returns an array of sorted durations by sport with a concatenation of minors sports in the last value
     *
     * @param integer $length
     * @return array unitId => value
     */
    public function getSortedDurations($length)
    {
        $output = array();

        foreach ($this->getSports() as $sport) {
            $output[$sport->getId()] = $sport->getValue($this->getDurationId());
        }

        arsort($output);

        if (count($output) <= $length) {
            return $output;

        }
        
        $others = array_sum(array_slice($output, $length - 1));

        return array_slice($output, 0, $length - 1, true) + array("others" => $others);
    }

    /**
     * @return array<Sport>
     */
    public function getSports()
    {
        return $this->sports;
    }

}
