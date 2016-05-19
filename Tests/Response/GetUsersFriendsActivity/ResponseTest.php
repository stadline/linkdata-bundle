<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersConnectedDevices;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersFriendsActivityMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersFriendsActivityResponse()
    {
        $serializer = $this->getSerializer();

        $usersFriendsActivityClientMock = new GetUsersFriendsActivityMock($serializer);

        $response = $usersFriendsActivityClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('publicActivity', $response);

        $this->assertIsPublicActivity($response->getPublicActivity());
    }

    private function assertIsPublicActivity($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Friends\PublicActivity", $object);

        // No time remaining to test sub elements
    }

}
