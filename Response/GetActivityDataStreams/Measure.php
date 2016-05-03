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
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\Common\Value>")
     *
     * @var array
     */
    private $values;

    /**
     * @return integer
     */
    public function getElapsedTime()
    {
        return $this->elapsedTime;
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
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
     */
    public function mergeValues(array $values)
    {
        foreach ($values as $value) {
            $this->values[$value->getId()] = $value;
        }
    }

    /**
     * @return boolean
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
     */
    public function isValid()
    {
        // wrong elapsedTime
        if ($this->getElapsedTime() > 24 * 3600 || $this->getElapsedTime() < 0) {
            return false;
        }

        return true;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


}
