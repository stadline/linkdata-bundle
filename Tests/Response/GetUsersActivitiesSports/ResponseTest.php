<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersActivitiesSports;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersActivitiesSportsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersActivitiesSportsResponse()
    {
        $serializer = $this->getSerializer();

        $usersActivitiesSportsClientMock = new GetUsersActivitiesSportsMock($serializer);

        $response = $usersActivitiesSportsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('sports', $response);

        $sportsCollection = $response->getSports();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $sportsCollection);

        $firstSportOfCollection = $sportsCollection->first();

        $this->assertElementsAreIndexed($sportsCollection, $firstSportOfCollection, 'getId');

        $this->assertIsSport($firstSportOfCollection);
    }

    private function assertIsSport($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\ActivitiesSport", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('cardinality', $object);
        $this->assertObjectHasAttribute('sport', $object);
    }

}
