<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersFriendsActivitiesSports;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersFriendsActivitiesSportsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersFriendsActivitiesSportsResponse()
    {
        $serializer = $this->getSerializer();

        $usersFriendsActivitiesSportsClientMock = new GetUsersFriendsActivitiesSportsMock($serializer);

        $response = $usersFriendsActivitiesSportsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('sports', $response);

        $sportsCollection = $response->getSports();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $sportsCollection);

        $firstSportOfCollection = $sportsCollection->first();

        $this->assertElementsAreIndexed($sportsCollection, $firstSportOfCollection, 'getId');

        $this->assertIsActivitiesSport($firstSportOfCollection);
    }

}
