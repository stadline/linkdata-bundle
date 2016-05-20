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

        $this->assertElementsAreIndexed($activityDataSummariesCollection, $firstDataSummaryOfCollection, 'getUnitId');

        $this->assertIsDataSummary($firstDataSummaryOfCollection);
    }

    public function assertIsDataSummary($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\DataSummary", $object);

        // old class not matching API return
    }

}
