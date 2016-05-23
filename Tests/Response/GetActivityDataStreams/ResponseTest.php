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

}
