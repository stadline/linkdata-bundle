<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersActivities;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersActivitiesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersActivitiesResponse()
    {
        $serializer = $this->getSerializer();

        $usersActivitiesClientMock = new GetUsersActivitiesMock($serializer);

        $response = $usersActivitiesClientMock->getResponse([]);

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
