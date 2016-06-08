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
        $values = $this->getValues();

        $this->values = [];

        foreach ($values as $value) {
            $date = !is_null($value->getDate()) ? (string) $value->getDate() : substr($value->getUpdatedTime(), 0, 10);
            $this->values[$date] = (int) $value->getValue();
        }

        krsort($this->values);
    }

    /**
     * @Serializer\PreSerialize
     */
    public function defineValuesForSerialization()
    {
        $values = $this->getValues();

        $this->values = [];

        foreach ($values as $key => $value) {
            $newValue =  new Value();
            $newValue->setDate($key);
            $newValue->setValue($value);
            $this->values[$key] = $newValue;
        }
    }

    /**
     * @return array<Value>
     */
    public function getValues()
    {
        return $this->values;
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
