<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersFriendsActivities;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersFriendsActivitiesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersFriendsActivitiesResponse()
    {
        $serializer = $this->getSerializer();

        $usersFriendsActivitiesClientMock = new GetUsersFriendsActivitiesMock();

        $response = $usersFriendsActivitiesClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('activities', $response);

        $activitiesCollection = $response->getActivities();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $activitiesCollection);

        $firstActivityOfCollection = $activitiesCollection->first();

        $this->assertElementsAreIndexed($activitiesCollection, 'getId');

        $this->assertIsActivity($firstActivityOfCollection);
    }

    private function assertIsActivity($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\Activity", $object);

        $this->assertObjectHasAttribute('startDate', $object);
        $this->assertObjectHasAttribute('timezone', $object);
        $this->assertObjectHasAttribute('sportId', $object);
        $this->assertObjectHasAttribute('libelle', $object);
        $this->assertObjectHasAttribute('manual', $object);
        $this->assertObjectHasAttribute('deviceModelId', $object);
        $this->assertObjectHasAttribute('createdAt', $object);
        $this->assertObjectHasAttribute('dataSummaries', $object);
        $this->assertObjectHasAttribute('about', $object);
        $this->assertObjectHasAttribute('tags', $object);

        $activityDataSummariesCollection = $object->getDataSummaries();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $activityDataSummariesCollection);

        $firstDataSummaryOfCollection = $activityDataSummariesCollection->first();

        $this->assertElementsAreIndexed($activityDataSummariesCollection, 'getUnitId');

        $this->assertIsDataSummary($firstDataSummaryOfCollection);
    }

    public function assertIsDataSummary($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\DataSummary", $object);

        $this->assertObjectHasAttribute('unitId', $object);
        $this->assertObjectHasAttribute('value', $object);
    }

}
