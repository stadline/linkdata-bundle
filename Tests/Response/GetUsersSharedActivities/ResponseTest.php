<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersSharedActivities;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersSharedActivitiesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersSharedActivitiesResponse()
    {
        $serializer = $this->getSerializer();

        $usersSharedActivitiesClientMock = new GetUsersSharedActivitiesMock($serializer);

        $response = $usersSharedActivitiesClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('activities', $response);

        $sharedActivitiesCollection = $response->getActivities();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $sharedActivitiesCollection);

        $firstSharedActivityOfCollection = $sharedActivitiesCollection->first();

        $this->assertIsSharedActivity($firstSharedActivityOfCollection);
    }

    public function assertIsSharedActivity($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\SharedActivity", $object);

        // No time remaining to test sub elements
    }

}
