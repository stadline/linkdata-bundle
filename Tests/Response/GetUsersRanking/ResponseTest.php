<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersConnectedDevices;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersRankingMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersRankingResponse()
    {
        $serializer = $this->getSerializer();

        $usersRankingClientMock = new GetUsersRankingMock($serializer);

        $response = $usersRankingClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('ranking', $response);
        $this->assertObjectHasAttribute('params', $response);

        $this->assertInternalType('array', $response->getParams());

        $this->assertNotEmpty($response->getParams());

        $usersRankingCollection = $response->getRanking();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $usersRankingCollection);

        $firstRankingUserOfCollection = $usersRankingCollection->first();

        $this->assertIsRankingUser($firstRankingUserOfCollection);
    }

    public function assertIsRankingUser($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\RankingUser", $object);

        // No time remaining to test sub elements
    }

}
