<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersFriendsActivities;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersFriendsActivitiesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersFriendsActivitiesResponse()
    {
        $serializer = $this->getSerializer();

        $usersFriendsActivitiesClientMock = new GetUsersFriendsActivitiesMock($serializer);

        $response = $usersFriendsActivitiesClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('activities', $response);

        $activitiesCollection = $response->getActivities();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $activitiesCollection);

        $firstActivityOfCollection = $activitiesCollection->first();

        $this->assertElementsAreIndexed($activitiesCollection, $firstActivityOfCollection, 'getId');

        $this->assertIsActivity($firstActivityOfCollection);
    }

    private function assertIsActivity($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\Activity", $object);

        // No time remaining to test sub elements
    }

}
