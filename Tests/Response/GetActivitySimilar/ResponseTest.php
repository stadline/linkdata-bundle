<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetActivitySimilar;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetActivitySimilarMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetActivitySimilarResponse()
    {
        $serializer = $this->getSerializer();

        $activitySimilarClientMock = new GetActivitySimilarMock($serializer);

        $response = $activitySimilarClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('activities', $response);

        $activitiesCollection = $response->getActivities();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $activitiesCollection);

        $firstActivityOfCollection = $response->getActivities()->first();

        $this->assertElementsAreIndexed($activitiesCollection, $firstActivityOfCollection, 'getId');

        $this->assertIsSimilarActivity($firstActivityOfCollection);
    }

    private function assertIsSimilarActivity($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Activity\SimilarActivity", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('sportId', $object);
        $this->assertObjectHasAttribute('sportId', $object);
        $this->assertObjectHasAttribute('deviceModelId', $object);
        $this->assertObjectHasAttribute('startDate', $object);
        $this->assertObjectHasAttribute('timezone', $object);
        $this->assertObjectHasAttribute('libelle', $object);
        $this->assertObjectHasAttribute('latitude', $object);
        $this->assertObjectHasAttribute('longitude', $object);
        $this->assertObjectHasAttribute('createdAt', $object);
        $this->assertObjectHasAttribute('dataSummary', $object);

        $this->assertIsDataSummary($object->getDataSummary());
    }

}
