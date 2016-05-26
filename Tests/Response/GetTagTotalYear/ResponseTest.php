<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetTagTotalYear;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetTagTotalYearMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetTagTotalYearResponse()
    {
        $serializer = $this->getSerializer();

        $tagTotalYearClientMock = new GetTagTotalYearMock();

        $response = $tagTotalYearClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('totalYear', $response);

        $this->assertIsTotalYear($response->getTotalYear());
    }

    private function assertIsTotalYear($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Tag\TotalYear", $object);

        $this->assertObjectHasAttribute('totalPoints', $object);
        $this->assertObjectHasAttribute('totalUsers', $object);
        $this->assertObjectHasAttribute('totalActivities', $object);
        $this->assertObjectHasAttribute('year', $object);
        $this->assertObjectHasAttribute('sports', $object);

        $sportsCollection = $object->getSports();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $sportsCollection);

        $firstSportOfCollection = $sportsCollection->first();

        $this->assertElementsAreIndexed($sportsCollection, 'getId');

        $this->assertIsSport($firstSportOfCollection);
    }

    public function assertIsSport($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Tag\Sport", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('values', $object);

        $this->assertInternalType('array', $object->getValues());
    }

}
