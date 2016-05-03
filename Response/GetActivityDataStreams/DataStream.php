<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use JMS\Serializer\Annotation as Serializer;

class DataStream
{
    /**
     * @Serializer\XmlList(inline=true, entry="MEASURE")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetActivityDataStreams\Measure>")
     * @Serializer\Accessor(getter="getMeasuresForSerialization")
     *
     * @var array
     */
    private $measures;

    /**
     * @Serializer\Exclude
     *
     * @var array
     */
    private $datatypes;

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
     * @return array
     */
    public function getMeasuresForSerialization()
    {
        $measures = $this->getMeasures();

        $this->measures = array();

        foreach ($measures as $measure) {
            $this->addMeasure($measure);
        }

        // add measure at elapsed_time = 0 (if not set)
        if (!isset($this->measures[0]) && !isset($this->measures[1])) {
            $measure = new FakeMeasure();
            $this->addMeasure($measure);
        }

        // just in case elapsed time are not in chronological order
        ksort($this->measures);

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
