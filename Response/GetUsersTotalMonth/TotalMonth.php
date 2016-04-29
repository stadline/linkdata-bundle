<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonth;

use Geonaute\LinkdataBundle\Utils\Datatype;
use JMS\Serializer\Annotation as Serializer;

class TotalMonth
{
    /**
     * @Serializer\SerializedName("MONTH")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $month;

    /**
     * @Serializer\SerializedName("SHARE_TOKEN")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $shareToken;

    /**
     * @Serializer\SerializedName("SPORTS")
     * @Serializer\Type("Geonaute\LinkdataBundle\Response\GetUsersTotalMonth\Sports")
     *
     * @var string
     */
    private $sports;

    public function __toString()
    {
        return $this->getMonth();
    }

    /**
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @return string
     */
    public function getShareToken()
    {
        return $this->shareToken;
    }

    /**
     * Sum values for a datatype on the year
     * 
     * @param integer $unitId
     * @return integer
     */
    private function getTotal($unitId)
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
     * Returns total duration on a year
     * 
     * @return integer
     */
    public function getTotalDuration()
    {
        return $this->getTotal($this->getDurationId());
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

        if (count($output) <= $length)
            return $output;

        $others = array_sum(array_slice($output, $length - 1));

        return array_slice($output, 0, $length - 1, true) + array("others" => $others);
    }

    /**
     * @return integer
     */
    public function getSports()
    {
        if ($this->sports == null) {
            $this->sports = new Sports($this->response, $this->xml->SPORTS[0]);
        }
        return $this->sports;
    }

    /**
     * @Serializer\VirtualProperty
     * @Serializer\SerializedName("sports")
     */
    public function getSportsArray()
    {
        return $this->getSports()->getArrayCopy();
    }
}
