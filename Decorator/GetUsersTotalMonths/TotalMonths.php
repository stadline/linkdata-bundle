<?php

namespace Geonaute\LinkdataBundle\Decorator\GetUsersTotalMonths;

use Doctrine\Common\Collections\ArrayCollection;
use Geonaute\LinkdataBundle\Utils\Datatype;

class TotalMonths extends ArrayCollection
{

    public function getDistanceId()
    {
        return Datatype::DISTANCE;
    }

    public function getDurationId()
    {
        return Datatype::DURATION;
    }

    public function getCaloriesId()
    {
        return Datatype::CALORIES_BURNT;
    }

    public function getPointsId()
    {
        return Datatype::POINTS_EARNED;
    }

    public function getSpeedId()
    {
        return Datatype::SPEED_AVG;
    }

    public function getAscentId()
    {
        return Datatype::ASCENT;
    }

    public function getDescentId()
    {
        return Datatype::DESCENT;
    }

    public function getActivityNumberId()
    {
        return Datatype::ACTIVITY_NUMBER;
    }

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

        foreach ($this->getValues() as $month)
        {
            foreach ($month->getSports() as $sport)
            {
                foreach ($unitId as $id)
                {
                    if (!array_key_exists($id, $output))
                    {
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

        foreach ($this->getValues() as $month)
        {
            foreach ($month->getSports() as $sport)
            {
                if (!array_key_exists($sport->getId(), $output))
                    $output[$sport->getId()] = 0;

                $output[$sport->getId()] += $sport->getValue(Datatype::DURATION);
            }
        }

        arsort($output);

        return $output;
    }
}