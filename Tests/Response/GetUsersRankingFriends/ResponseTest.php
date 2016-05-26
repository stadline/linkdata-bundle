<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersRankingFriends;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersRankingFriendsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersRankingFriendsResponse()
    {
        $serializer = $this->getSerializer();

        $usersRankingFriendsClientMock = new GetUsersRankingFriendsMock();

        $response = $usersRankingFriendsClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('ranking', $response);
        $this->assertObjectHasAttribute('params', $response);

        $this->assertInternalType('array', $response->getParams());

        $this->assertNotEmpty($response->getParams());

        $usersRankingFriendsCollection = $response->getRanking();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $usersRankingFriendsCollection);

        $firstRankingUserOfCollection = $usersRankingFriendsCollection->first();

        $this->assertIsRankingUser($firstRankingUserOfCollection);
    }

}
