<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersActivitiesSports;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersActivitiesSportsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersActivitiesSportsResponse()
    {
        $serializer = $this->getSerializer();

        $usersActivitiesSportsClientMock = new GetUsersActivitiesSportsMock();

        $response = $usersActivitiesSportsClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('sports', $response);

        $sportsCollection = $response->getSports();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $sportsCollection);

        $firstSportOfCollection = $sportsCollection->first();

        $this->assertElementsAreIndexed($sportsCollection, 'getId');

        $this->assertIsActivitiesSport($firstSportOfCollection);
    }

}
