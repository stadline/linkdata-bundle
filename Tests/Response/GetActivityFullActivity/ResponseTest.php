<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetActivityFullActivity;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetActivityFullActivityMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetActivityFullActivityResponse()
    {
        $serializer = $this->getSerializer();

        $activityFullActivityClientMock = new GetActivityFullActivityMock($serializer);

        $response = $activityFullActivityClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('activity', $response);

        $this->assertIsFullActivity($response->getActivity());
    }

    private function assertIsFullActivity($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Activity\FullActivity", $object);

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
        $this->assertIsTrack($object->getTrack());
        $this->assertIsDataSummary($object->getSummary());
        $this->assertIsDataStream($object->getDataStream());
    }

    private function assertIsTrack($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Tracks\Track', $object);

        $this->assertObjectHasAttribute('locations', $object);

        $trackLocations = $object->getLocations();

        $this->assertInternalType('array', $trackLocations);

        $this->assertIsLocation($trackLocations[0]);
    }

    private function assertIsLocation($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Tracks\Location', $object);

        $this->assertObjectHasAttribute('elapsedTime', $object);
        $this->assertObjectHasAttribute('latitude', $object);
        $this->assertObjectHasAttribute('longitude', $object);
        $this->assertObjectHasAttribute('elevation', $object);
    }

}
