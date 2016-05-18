<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetActivityDataStreams;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetActivityDataStreamsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetActivityDataStreamsResponse()
    {
        $serializer = $this->getSerializer();

        $activityDataStreamsClientMock = new GetActivityDataStreamsMock($serializer);

        $response = $activityDataStreamsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('activity', $response);

        $this->assertIsDataStreamsActivity($response->getActivity());
    }

    private function assertIsDataStreamsActivity($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Activity\DataStreamsActivity", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('dataStream', $object);

        $this->assertIsDataStream($object->getDataStream());
    }

    private function assertIsDataStream($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Activity\DataStream", $object);

        $this->assertObjectHasAttribute('measures', $object);
        $this->assertObjectHasAttribute('datatypes', $object);

        $dataStreamMeasures = $object->getMeasures();

        $this->assertInternalType('array', $dataStreamMeasures);
        $this->assertInternalType('array', $object->getDatatypes());

        if (!empty($dataStreamMeasures)) {
            $this->assertIsMeasure($dataStreamMeasures[0]);
        }
    }

    private function assertIsMeasure($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Activity\Measure", $object);

        $this->assertObjectHasAttribute('values', $object);
        $this->assertObjectHasAttribute('elapsedTime', $object);
        $this->assertObjectHasAttribute('datatypes', $object);

        $measureValues = $object->getValues();

        $this->assertInternalType('array', $measureValues);

        if (!empty($measureValues)) {
            $this->assertIsValue($measureValues[0]);
        }
    }

}
