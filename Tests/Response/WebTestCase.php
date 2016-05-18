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

    public function assertElementsAreIndexed(ArrayCollection $arrayCollection, $firstObjectOfCollection, $method = '')
    {
        if (is_array($method)) {
            $firstElementIndex = $firstObjectOfCollection;
            foreach ($method as $tmpMethod) {
                $firstElementIndex = $firstElementIndex->$tmpMethod();
            }
        } else {
            $firstElementIndex = $firstObjectOfCollection->$method();
        }

        $this->assertArrayHasKey($firstElementIndex, $arrayCollection);
        $this->assertEquals($arrayCollection[$firstElementIndex], $firstObjectOfCollection);
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

    public function assertIsValue($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Common\Value", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('value', $object);
    }

}
