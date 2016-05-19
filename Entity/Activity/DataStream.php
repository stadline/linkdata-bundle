<?php

namespace Geonaute\LinkdataBundle\Entity\Activity;

use JMS\Serializer\Annotation as Serializer;

class DataStream
{

    /**
     * @Serializer\SerializedName("MEASURE")
     * @Serializer\XmlList(inline = true, entry = "MEASURE")
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Entity\Activity\Measure>")
     *
     * @var array<Measure>
     */
    protected $measures;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    protected $datatypes = [];

    /**
     * @Serializer\PostDeserialize
     */
    public function defineMeasuresAndDatatypesForDeserialization()
    {
        $measures = $this->getMeasures();

        $this->measures = [];

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
    }

    /**
     * Function to add measure
     *
     * @param Measure $measure
     */
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
     * @return array<Measure>
     */
    public function getMeasures()
    {
        return $this->measures;
    }

    /**
     * @return Measure
     */
    public function getMeasure($elapsedTime)
    {
        if ($this->hasMeasure($elapsedTime)) {
            return $this->measures[$elapsedTime];
        }
    }

    /**
     * @return boolean
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
        $datatypesValues = [];

        foreach ($this->measures as $measure) {
            foreach ($measure->getValues() as $value) {
                if (isset($datatypesValues[$value->getId()])) {
                    $datatypesValues[$value->getId()][$measure->getElapsedTime()] = (int) (string) $value;
                } else {
                    $datatypesValues[$value->getId()] = [
                        $measure->getElapsedTime() => (int) (string) $value,
                    ];
                }
            }
        }

        return $datatypesValues;
    }

}
