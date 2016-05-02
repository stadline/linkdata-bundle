<?php

namespace Geonaute\LinkdataBundle\Response\GetActivityDataSummary;

use Geonaute\LinkdataBundle\Utils\Datatype;
use JMS\Serializer\Annotation as Serializer;

class DataSummary
{
    /**
     * @Serializer\SerializedName("VALUE")
     * @Serializer\XmlList(entry="VALUE", inline=true)
     * @Serializer\Type("array<Geonaute\LinkdataBundle\Response\GetUsersTotalMonth\Value>")
     *
     * @var string
     */
    private $values;

    /**
     * @Serializer\Exclude
     */
    public static $publicDatatypes = array(
        // distance
        Datatype::DISTANCE,
        // speed
        Datatype::SPEED_AVG,
        // heart-rate
        Datatype::HR_CURRENT,
        Datatype::HR_AVG,
        Datatype::HR_PERCENTAGE_MIN,
        Datatype::HR_PERCENTAGE_MAX,
        // duration
        Datatype::DURATION,
        Datatype::ACTIVE_TIME,
        // calories
        Datatype::CALORIES_BURNT,
        // elevation
        Datatype::ELEVATION_CURRENT,
        Datatype::ELEVATION_MIN,
        Datatype::ELEVATION_MAX,
        Datatype::ASCENT,
        Datatype::DESCENT,
        // segments
        Datatype::LAP,
        // cadence
        Datatype::STEP_NUMBER,
        Datatype::RPM_CURRENT,
        Datatype::RPM_AVG,
        // points
        Datatype::POINTS_EARNED,
    );

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @return array
     */
    public function getValuesAsArray()
    {
        $flatArray = array();

        foreach($this->getValues() as $value) {
            $flatArray[$value->getId()] = (string) $value->getValue();
        }

        return $flatArray;
    }

    /**
     * @return Value
     */
    public function getValue($id)
    {
        if ($this->hasValue($id)) {
            return $this->values[$id];
        }
    }

    /**
     * @return boolean
     */
    public function hasValue($id)
    {
        return isset($this->values[$id]);
    }
    
    /**
     * Return only the public value present in the table
     * @param boolean preloadElevationValue
     * @return array
     */
    public function getPublicValues($preloadElevation = false)
    {
        //Preload Elevation values for templating purpose
        $elevationIds = array(Datatype::ASCENT, Datatype::DESCENT);
        
        if ($preloadElevation && count(array_intersect(array_keys($this->values), $elevationIds)) != 2) {
            foreach($elevationIds as $id) {
                $xml = simplexml_load_string("<VALUE id='$id'>0</VALUE>");
                $value = new Value($this->response,$xml);
                $this->values[$value->getId()] = $value;
            }
        }
        
        // filter and sort values
        $publicValues = array();
        foreach (self::$publicDatatypes as $datatypeId) {
            if (isset($this->values[$datatypeId])) {
                $publicValues[$datatypeId] = $this->values[$datatypeId];
            }
        }
        
        return $publicValues;
    }
}
