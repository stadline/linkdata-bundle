<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetFriends;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetFriendsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetFriendsResponse()
    {
        $serializer = $this->getSerializer();

        $friendsClientMock = new GetFriendsMock();

        $response = $friendsClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('friendProfiles', $response);

        $friendsCollection = $response->getFriends();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $friendsCollection);

        $firstFriendOfCollection = $friendsCollection->first();

        $this->assertElementsAreIndexed($friendsCollection, [0 => 'getUser', 1 => 'getLdid']);

        $this->assertIsProfile($firstFriendOfCollection);
    }

}
