<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataStreams;

use Guzzle\Service\Command\ResponseClassInterface;
use JMS\Serializer\Annotation as Serializer;

class DataStream
{
    /**
     * @Serializer\Exclude
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

    public function __construct(ResponseClassInterface $response, \SimpleXMLElement $DATASTREAM)
    {
        $this->measures = array();
        $this->datatypes = array();

        foreach ($DATASTREAM->MEASURE as $MEASURE) {
            $measure = new Measure($response, $MEASURE);
            $this->addMeasure($measure);
        }

        // add measure at elapsed_time = 0 (if not set)
        if (!isset($this->measures[0]) && !isset($this->measures[1])) {
            $measure = new FakeMeasure($response);
            $this->addMeasure($measure);
        }

        // just in case elapsed time are not in chronological order
        ksort($this->measures);
    }

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
