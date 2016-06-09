<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use JMS\Serializer\Annotation as Serializer;

class Measure
{

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\XmlMap(inline = true, entry = "VALUE")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Entity\Users\Value>")
     *
     * @var array
     */
    protected $values;

    /**
     * @Serializer\SerializedName("unitid")
     * @Serializer\XmlAttribute()
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    protected $unitId;

    /**
     * @Serializer\PostDeserialize
     */
    public function defineValuesForDeserialization()
    {
        $values = $this->values;

        $this->values = [];

        foreach ($values as $value) {
            $date = !is_null($value->getDate()) ? (string) $value->getDate() : substr($value->getUpdatedTime(), 0, 10);
            $this->values[$date] = $value;
        }

        krsort($this->values);
    }

    /**
     * @return array<Value>
     */
    public function getValues()
    {
        $values = [];

        foreach ($this->values as $k => $v){
            $values[$k] = $v->getValue();
        }

        return $values;
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
            return $value->getValue();
        }
    }

}
