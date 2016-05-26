<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetTracksDetails;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetTracksDetailsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetTracksDetailsResponse()
    {
        $serializer = $this->getSerializer();

        $trackDetailsClientMock = new GetTracksDetailsMock();

        $response = $trackDetailsClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('track', $response);

        $this->assertIsTrack($response->getTrack());
    }

    private function assertIsTrack($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Tracks\Track", $object);

        $this->assertObjectHasAttribute('locations', $object);

        $trackLocationsArray = $object->getLocations();

        $this->assertInternalType('array', $trackLocationsArray);

        $this->assertIsLocation($trackLocationsArray[0]);
    }

    public function assertIsLocation($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Tracks\Location", $object);
        
        $this->assertObjectHasAttribute('elapsedTime', $object);
        $this->assertObjectHasAttribute('latitude', $object);
        $this->assertObjectHasAttribute('longitude', $object);
        $this->assertObjectHasAttribute('elevation', $object);
    }

}
