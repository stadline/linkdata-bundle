<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Common\Measure as BaseMeasure;
use JMS\Serializer\Annotation as Serializer;

class Measure extends BaseMeasure
{

    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $unitId;

    /**
     * @Serializer\PostDeserialize
     */
    public function defineValuesForDeserialization()
    {
//        $values = $this->getValues();
//
//        $this->values = [];
//
//        foreach ($values as $value) {
//            $date = isset($value['date']) ? (string) $value['date'] : substr($value['updated_time'], 0, 10); @todo change this
//            $this->values[$date] = $value;
//        }
//
//        krsort($this->values);
//
//        $this->values = $values;
    }

    /**
     * @return integer
     */
    public function getUnitId()
    {
        return $this->unitId;
    }

    /**
     * @return integer
     */
    public function getLastValue()
    {
        foreach ($this->values as $value) {
            return $value;
        }
    }

}
