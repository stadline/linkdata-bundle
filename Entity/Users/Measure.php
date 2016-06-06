<?php

namespace Geonaute\LinkdataBundle\Entity\Users;

use Geonaute\LinkdataBundle\Entity\Common\Measure as BaseMeasure;
use JMS\Serializer\Annotation as Serializer;

class Measure extends BaseMeasure
{

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\XmlMap(inline = true, entry = "VALUE")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Entity\Users\Value>")
     *
     * @var array<Value>
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
            $date = isset($value->date) ? (string) $value->getDate() : substr($value->getUpdatedTime(), 0, 10);
            $this->values[$date] = $value;
        }

        krsort($this->values);
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
