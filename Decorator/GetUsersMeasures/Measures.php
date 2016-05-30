<?php

namespace Geonaute\LinkdataBundle\Decorator\GetUsersMeasures;

use Doctrine\Common\Collections\ArrayCollection;
use Geonaute\LinkdataBundle\Entity\Users\Measure;
use Geonaute\LinkdataBundle\Utils\Datatype;

class Measures extends ArrayCollection
{
    /**
     * @return Measure
     */
    public function getMeasure($unitId)
    {
        if ($this->offsetExists($unitId)) {
            return $this->offsetGet($unitId);
        }
    }

    /**
     * @deprecated
     */
    public function getSizeValue()
    {
        return $this->getHeightValue();
    }

    public function getHeightValue()
    {
        return $this->getValue(Datatype::HEIGHT);
    }

    public function getWeightValue()
    {
        return $this->getValue(Datatype::WEIGHT_KILOGRAMS);
    }

    public function getHRRestValue()
    {
        return $this->getValue(Datatype::HR_REST);
    }

    public function getHRMaxValue()
    {
        return $this->getValue(Datatype::HR_MAX);
    }

    private function getValue($unitId)
    {
        if ($measure = $this->getMeasure($unitId)) {
            return $measure->getLastValue();
        }

        return false;
    }

}