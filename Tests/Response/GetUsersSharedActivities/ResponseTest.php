<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersSharedActivities;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersSharedActivitiesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersSharedActivitiesResponse()
    {
        $serializer = $this->getSerializer();

        $usersSharedActivitiesClientMock = new GetUsersSharedActivitiesMock();

        $response = $usersSharedActivitiesClientMock->getResponse($serializer, []);

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

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('token', $object);
        $this->assertObjectHasAttribute('startDate', $object);
        $this->assertObjectHasAttribute('sportId', $object);
        $this->assertObjectHasAttribute('libelle', $object);
        $this->assertObjectHasAttribute('summary', $object);
    }

}
