<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use JMS\Serializer\Annotation as Serializer;

class DataStream
{
    /**
     * @Serializer\XmlList(inline=true, entry="MEASURE")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetActivityDataStreams\Measure>")
     *
     * @var array
     */
    private $measures;

    public function addMeasure($measure)
    {
        // skip invalid measure
        if (!$measure->isValid()) {
            return;
        }

        // update measures
        if (isset($this->measures[$measure->getElapsedTime()])) {
            $this->measures[$measure->getElapsedTime()]->mergeValues($measure->getValues());
        } else {
            $this->measures[$measure->getElapsedTime()] = $measure;
            $this->datatypes += $measure->getDatatypes();
        }
    }

    /**
     * @return array
     */
    public function getMeasures()
    {
        return $this->measures;
    }

    /**
     * @return Value
     */
    public function getMeasure($elapsedTime)
    {
        if ($this->hasMeasure($elapsedTime)) {
            return $this->measures[$elapsedTime];
        }
    }

    /**
     * @return Value
     */
    public function hasMeasure($elapsedTime)
    {
        return isset($this->measures[$elapsedTime]);
    }

    /**
     * @return array
     */
    public function getDatatypes()
    {
        return $this->datatypes;
    }

    /**
     * @return array
     */
    public function getDatatypesValues()
    {
        $datatypesValues = array();

        foreach ($this->measures as $measure) {
            foreach ($measure->getValues() as $value) {
                if (isset($datatypesValues[$value->getId()])) {
                    $datatypesValues[$value->getId()][$measure->getElapsedTime()] = (int)(string) $value;
                } else {
                    $datatypesValues[$value->getId()] = array(
                        $measure->getElapsedTime() => (int)(string) $value,
                    );
                }
            }
        }

        return $datatypesValues;
    }
}
