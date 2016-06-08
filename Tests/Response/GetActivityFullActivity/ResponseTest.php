<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetActivityFullActivity;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetActivityFullActivityMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetActivityFullActivityResponse()
    {
        $serializer = $this->getSerializer();

        $activityFullActivityClientMock = new GetActivityFullActivityMock();

        $response = $activityFullActivityClientMock->getResponse($serializer, []);

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
        $this->assertObjectHasAttribute('sessionToken', $object);
        $this->assertObjectHasAttribute('shareToken', $object);
        $this->assertObjectHasAttribute('manual', $object);
        $this->assertObjectHasAttribute('createdAt', $object);
        $this->assertObjectHasAttribute('updateTime', $object);
        $this->assertObjectHasAttribute('about', $object);
        $this->assertObjectHasAttribute('tags', $object);

        $this->assertInternalType('array', $object->getTags());
        $this->assertIsAbout($object->getAbout());
    }

    private function assertIsTrack($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Tracks\Track', $object);

        $this->assertObjectHasAttribute('locations', $object);

        $trackLocationsArray = $object->getLocations();

        $this->assertInternalType('array', $trackLocationsArray);

        $this->assertIsLocationInTracksDirectory($trackLocationsArray[0]);
    }

}
