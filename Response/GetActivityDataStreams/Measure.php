<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use Geonaute\LinkdataBundle\Utils\Datatype;
use Geonaute\LinkdataBundle\Response\Common\Value;
use JMS\Serializer\Annotation as Serializer;

class Measure
{

    /**
     * @Serializer\XmlAttribute()
     * @Serializer\Type("integer")
     *
     * @var integer
     */
    private $elapsedTime;

    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\XmlList(entry="VALUE", inline=true)
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\Common\Value>")
     *
     * @var array
     */
    private $values;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    private $datatypes;

    /**
     * @Serializer\PostDeserialize
     */
    public function defineValuesAndDatatypesForSerialization()
    {
        $values = $this->getValues();

        $this->values = [];
        $this->datatypes = [];

        foreach ($values as $value) {
            $this->values[$value->getId()] = $value;
            $this->datatypes[$value->getId()] = $value->getId();
        }
    }

    /**
     * @return integer
     */
    public function getElapsedTime()
    {
        return $this->elapsedTime;
    }

    /**
     * @param integer $elapsedTime
     */
    public function setElapsedTime($elapsedTime)
    {
        $this->elapsedTime = $elapsedTime;
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param array $values
     */
    public function setValues($values)
    {
        $this->values = $values;
    }


    /**
     * @return Value
     */
    public function getValue($id)
    {
        if ($id == Datatype::ELAPSED_TIME) {
            return $this->getElapsedTime();
        } elseif ($this->hasValue($id)) {
            return $this->values[$id];
        }
    }

    /**
     * Merge values
     *
     * @param array $values
     */
    public function mergeValues(array $values)
    {
        foreach ($values as $value) {
            $this->values[$value->getId()] = $value;
        }
    }

    /** Check if has value
     *
     * @param integer $id
     * @return Value
     */
    public function hasValue($id)
    {
        if ($id == Datatype::ELAPSED_TIME) {
            return true;
        } else {
            return isset($this->values[$id]);
        }
    }

    /**
     * @return array
     */
    public function getDatatypes()
    {
        return $this->datatypes;
    }

    /**
     * Check if a measure seems wrong to exclude it
     *
     * @return boolean
     */
    public function isValid()
    {
        // wrong elapsedTime
        if ($this->getElapsedTime() > 24 * 3600 || $this->getElapsedTime() < 0) {
            return false;
        }

        return true;
    }

}
