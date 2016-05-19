<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetTracksDetails;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetTracksDetailsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetTracksDetailsResponse()
    {
        $serializer = $this->getSerializer();

        $trackDetailsClientMock = new GetTracksDetailsMock($serializer);

        $response = $trackDetailsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('track', $response);

        $this->assertIsTrack($response->getTrack());
    }

    private function assertIsTrack($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Tracks\Track", $object);

        // No time remaining to test sub elements
    }

}
