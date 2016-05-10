<?php

namespace Geonaute\LinkdataBundle\Response\GetUsersTotalMonths;

use Geonaute\LinkdataBundle\Utils\Datatype;

class TotalMonths extends \ArrayObject
{

    /**
     * @Serializer\SerializedName("TOTALMONTH")
     * @Serializer\XmlList(entry="TOTALMONTH", inline=true)
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetUsersTotalMonth\TotalMonth>")
     */
    private $totalMonths;

    /**
     * @Serializer\PostDeserialize
     */
    public function generateCollectionForDeserialization()
    {
        $totalMonths = $this->totalMonths;
        $collection = [];

        // Used $totalMonths only to facilitate deserialization
        unset($this->totalMonths);

        foreach ($totalMonths as $totalMonth) {
            $collection[$totalMonth->getMonth()] = $totalMonth;
        }

        // build ArrayObject using collection
        return parent::__construct($collection);
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
    public function getDurationId()
    {
        return Datatype::DURATION;
    }

    /**
     * @return integer
     */
    public function getCaloriesId()
    {
        return Datatype::CALORIES_BURNT;
    }

    /**
     * @return integer
     */
    public function getPointsId()
    {
        return Datatype::POINTS_EARNED;
    }

    /**
     * @return integer
     */
    public function getSpeedId()
    {
        return Datatype::SPEED_AVG;
    }

    /**
     * @return integer
     */
    public function getAscentId()
    {
        return Datatype::ASCENT;
    }

    /**
     * @return integer
     */
    public function getDescentId()
    {
        return Datatype::DESCENT;
    }

    /**
     * @return integer
     */
    public function getActivityNumberId()
    {
        return Datatype::ACTIVITY_NUMBER;
    }

    /**
     * @return array
     */
    public function getArray()
    {
        $output = array();

        $unitId = array(
            $this->getDistanceId(),
            $this->getDurationId(),
            $this->getCaloriesId(),
            $this->getPointsId(),
            $this->getAscentId(),
            $this->getDescentId(),
            $this->getActivityNumberId(),
        );

        foreach ($this as $month) {
            foreach ($month->getSports() as $sport) {
                foreach ($unitId as $id) {
                    if (!array_key_exists($id, $output)) {
                        $output[$id] = array();
                    }

                    if (!array_key_exists($sport->getId(), $output[$id]))
                        $output[$id][$sport->getId()] = array();

                    if (!array_key_exists($month->getMonth(), $output[$id][$sport->getId()]))
                        $output[$id][$sport->getId()][$month->getMonth()] = array();

                    $output[$id][$sport->getId()][$month->getMonth()] = $sport->getValue($id);
                }
            }
        }

        return $output;
    }

    /**
     * Returns an array with sport id as keys and duration on the year in values to determine proeminent sport
     *
     * @return array:
     */
    public function getSports()
    {
        $output = array();

        foreach ($this as $month) {
            foreach ($month->getSports() as $sport) {
                if (!array_key_exists($sport->getId(), $output))
                    $output[$sport->getId()] = 0;

                $output[$sport->getId()] += $sport->getValue(Datatype::DURATION);
            }
        }

        arsort($output);

        return $output;
    }

}
