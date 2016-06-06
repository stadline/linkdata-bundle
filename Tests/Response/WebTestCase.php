<?php

namespace Geonaute\LinkdataBundle\Tests\Response;

use Geonaute\LinkdataBundle\Visitor\XmlDeserializationVisitor;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;

class WebTestCase extends \PHPUnit_Framework_TestCase
{

    public function getSerializer()
    {
        $serializerBuilder = new SerializerBuilder();
        $serializerBuilder->setDeserializationVisitor('xml', new XmlDeserializationVisitor(new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy())));
        $serializer = $serializerBuilder->build();

        return $serializer;
    }

    /**
     * This method assert that ArrayCollection[$key] = $object with getMethod = $key
     * example : ArrayCollection[8] = the object in collection with ->getMethod() returns 8
     *
     * @param ArrayCollection $arrayCollection
     * @param mixed $method
     */
    public function assertElementsAreIndexed(ArrayCollection $arrayCollection, $method = '')
    {
        foreach ($arrayCollection as $elementOfCollection) {
            $currentElementIndex = $this->getIndexOfElement($elementOfCollection, $method);

            $this->assertArrayHasKey($currentElementIndex, $arrayCollection);
            $this->assertEquals($arrayCollection[$currentElementIndex], $elementOfCollection);
        }
    }

    /**
     * This method get the indexElement for the assertElementsAreIndex function
     * example :
     *
     * if $method is an array "[0 => 'getA', 1 => 'getB']", we do :
     * $element->getA()->getB()
     *
     * if $method is a string "getC", we do :
     * $element->getC()
     *
     * @param \stdClass $element
     * @param mixed $method
     * @return type
     */
    public function getIndexOfElement($element, $method)
    {
        if (is_array($method)) {
            $currentElementIndex = $element;
            foreach ($method as $tmpMethod) {
                $currentElementIndex = $currentElementIndex->$tmpMethod();
            }
        } else {
            $currentElementIndex = $element->$method();
        }

        return $currentElementIndex;
    }

    public function assertIsAbout($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Activity\About', $object);

        $this->assertObjectHasAttribute('track', $object);
        $this->assertObjectHasAttribute('dataStream', $object);
        $this->assertObjectHasAttribute('lap', $object);
        $this->assertObjectHasAttribute('elevation', $object);
        $this->assertObjectHasAttribute('heartrate', $object);
        $this->assertObjectHasAttribute('speed', $object);
        $this->assertObjectHasAttribute('challenge', $object);
    }

    public function assertIsActivitiesSport($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\ActivitiesSport", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('cardinality', $object);
    }

    public function assertIsActivitiesTag($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\ActivitiesTag", $object);

        $this->assertObjectHasAttribute('name', $object);
        $this->assertObjectHasAttribute('cardinality', $object);
    }

    public function assertIsDataStream($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Activity\DataStream", $object);

        $this->assertObjectHasAttribute('measures', $object);
        $this->assertObjectHasAttribute('datatypes', $object);

        $dataStreamMeasures = $object->getMeasures();

        $this->assertInternalType('array', $dataStreamMeasures);
        $this->assertInternalType('array', $object->getDatatypes());

        $this->assertIsMeasure($dataStreamMeasures[0]);
    }

    public function assertIsDataSummary($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Activity\DataSummary", $object);

        $this->assertObjectHasAttribute('values', $object);

        $dataSummaryValues = $object->getValues();

        $this->assertInternalType('array', $dataSummaryValues);

        $this->assertIsValue($dataSummaryValues[0]);
    }

    public function assertIsDeviceModel($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Reference\DeviceModel", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('name', $object);
        $this->assertObjectHasAttribute('brandId', $object);
    }

    public function assertIsLocation($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Route\Location", $object);

        $this->assertObjectHasAttribute('elapsedTime', $object);
        $this->assertObjectHasAttribute('latitude', $object);
        $this->assertObjectHasAttribute('longitude', $object);
        $this->assertObjectHasAttribute('elevation', $object);
    }

    public function assertIsLocationInTracksDirectory($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Tracks\Location', $object);

        $this->assertObjectHasAttribute('elapsedTime', $object);
        $this->assertObjectHasAttribute('latitude', $object);
        $this->assertObjectHasAttribute('longitude', $object);
        $this->assertObjectHasAttribute('elevation', $object);
    }

    public function assertIsMeasure($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Activity\Measure", $object);

        $this->assertObjectHasAttribute('values', $object);
        $this->assertObjectHasAttribute('elapsedTime', $object);
        $this->assertObjectHasAttribute('datatypes', $object);

        $measureValues = $object->getValues();

        $this->assertInternalType('array', $measureValues);

        $this->assertIsValue($measureValues[0]);
    }

    public function assertIsMeasureInUsersDirectory($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\Measure", $object);

        $this->assertObjectHasAttribute('unitId', $object);
        $this->assertObjectHasAttribute('values', $object);

        $measureValues = $object->getValues();

        $this->assertInternalType('array', $measureValues);

        $this->assertIsValueInUsersDirectory(current($measureValues));
    }

    public function assertIsProfile($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Users\Profile', $object);

        $this->assertObjectHasAttribute('user', $object);
        $this->assertObjectHasAttribute('sportIds', $object);
        $this->assertObjectHasAttribute('totals', $object);

        $this->assertInternalType('array', $object->getSportIds());

        $this->assertIsTotalProfileUser($object->getUser());
    }

    public function assertIsRankingUser($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\RankingUser", $object);

        $this->assertObjectHasAttribute('firstName', $object);
        $this->assertObjectHasAttribute('lastName', $object);
        $this->assertObjectHasAttribute('ldid', $object);
        $this->assertObjectHasAttribute('country', $object);
        $this->assertObjectHasAttribute('gender', $object);
        $this->assertObjectHasAttribute('totalOns', $object);
        $this->assertObjectHasAttribute('position', $object);
        $this->assertObjectHasAttribute('total', $object);
        $this->assertObjectHasAttribute('previousPosition', $object);
    }

    public function assertIsRoute($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Common\Route", $object);

        $this->assertObjectHasAttribute('summary', $object);
        $this->assertObjectHasAttribute('locations', $object);

        $this->assertIsSummary($object->getSummary());

        $locationsArray = $object->getLocations();

        $this->assertInternalType('array', $locationsArray);

        $this->assertIsLocation($locationsArray[0]);
    }

    public function assertIsSport($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Common\Sport", $object);

        $this->assertObjectHasAttribute('id', $object);
    }

    public function assertIsSummary($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Route\Summary", $object);

        $this->assertObjectHasAttribute('token', $object);
        $this->assertObjectHasAttribute('libelle', $object);
        $this->assertObjectHasAttribute('distance', $object);
        $this->assertObjectHasAttribute('ascendant', $object);
        $this->assertObjectHasAttribute('descendant', $object);
        $this->assertObjectHasAttribute('ldid', $object);
    }

    public function assertIsTotalMonth($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\TotalMonth", $object);

        $this->assertObjectHasAttribute('month', $object);
        $this->assertObjectHasAttribute('shareToken', $object);
        $this->assertObjectHasAttribute('sports', $object);

        $sportsCollection = $object->getSports();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $sportsCollection);

        $firstSportOfCollection = $sportsCollection->first();

        $this->assertElementsAreIndexed($sportsCollection, 'getId');

        $this->assertIsSport($firstSportOfCollection);
    }

    public function assertIsTotalProfileUser($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Users\TotalProfileUser', $object);

        $this->assertObjectHasAttribute('firstName', $object);
        $this->assertObjectHasAttribute('lastName', $object);
        $this->assertObjectHasAttribute('ldid', $object);
        $this->assertObjectHasAttribute('country', $object);
        $this->assertObjectHasAttribute('gender', $object);
        $this->assertObjectHasAttribute('totalOns', $object);
    }

    public function assertIsUsersTotalYearTotalYear($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\UsersTotalYearTotalYear", $object);

        $this->assertObjectHasAttribute('year', $object);
        $this->assertObjectHasAttribute('shareToken', $object);
        $this->assertObjectHasAttribute('sports', $object);

        $sportsCollection = $object->getSports();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $sportsCollection);

        $firstSportOfCollection = $sportsCollection->first();

        $this->assertElementsAreIndexed($sportsCollection, 'getId');

        $this->assertIsSport($firstSportOfCollection);
    }

    public function assertIsValue($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Common\Value", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('value', $object);
    }

    public function assertIsValueInUsersDirectory($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\Value", $object);

        $this->assertObjectHasAttribute('date', $object);
        $this->assertObjectHasAttribute('updatedTime', $object);
        $this->assertObjectHasAttribute('value', $object);
    }

}
