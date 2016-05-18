<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetActivityDataSummary;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetActivitySummaryMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetActivitySummaryResponse()
    {
        $serializer = $this->getSerializer();

        $activitySummaryClientMock = new GetActivitySummaryMock($serializer);

        $response = $activitySummaryClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('activity', $response);

        $this->assertIsSummaryActivity($response->getActivity());
    }

    private function assertIsSummaryActivity($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Activity\SummaryActivity", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('userId', $object);
        $this->assertObjectHasAttribute('sportId', $object);
        $this->assertObjectHasAttribute('deviceId', $object);
        $this->assertObjectHasAttribute('device', $object);
        $this->assertObjectHasAttribute('deviceModelId', $object);
        $this->assertObjectHasAttribute('startDate', $object);
        $this->assertObjectHasAttribute('timezone', $object);
        $this->assertObjectHasAttribute('duration', $object);
        $this->assertObjectHasAttribute('libelle', $object);
        $this->assertObjectHasAttribute('comment', $object);
        $this->assertObjectHasAttribute('latitude', $object);
        $this->assertObjectHasAttribute('longitude', $object);
        $this->assertObjectHasAttribute('elevation', $object);
        $this->assertObjectHasAttribute('trackId', $object);
        $this->assertObjectHasAttribute('track', $object);
        $this->assertObjectHasAttribute('sessionToken', $object);
        $this->assertObjectHasAttribute('shareToken', $object);
        $this->assertObjectHasAttribute('manual', $object);
        $this->assertObjectHasAttribute('createdAt', $object);
        $this->assertObjectHasAttribute('updateTime', $object);
        $this->assertObjectHasAttribute('about', $object);
        $this->assertObjectHasAttribute('tags', $object);
        $this->assertObjectHasAttribute('summary', $object);
        $this->assertObjectHasAttribute('dataStream', $object);

        $this->assertInternalType('array', $object->getTags());

        $this->assertIsAbout($object->getAbout());
    }

}
