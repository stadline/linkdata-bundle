<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersFriendsActivity;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersFriendsActivityMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersFriendsActivityResponse() // All is not tested
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

        $this->assertObjectHasAttribute('activity', $object);
        $this->assertObjectHasAttribute('token', $object);

        $this->assertIsActivity($object->getActivity());
    }

    private function assertIsActivity($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Shares\Activity", $object);

        // No time remaining to test sub elements
    }

}
