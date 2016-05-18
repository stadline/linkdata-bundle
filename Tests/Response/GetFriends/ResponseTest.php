<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetFriends;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetFriendsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetFriendsResponse()
    {
        $serializer = $this->getSerializer();

        $friendsClientMock = new GetFriendsMock($serializer);

        $response = $friendsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('friendProfiles', $response);

        $friendsCollection = $response->getFriends();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $friendsCollection);

        $firstFriendOfCollection = $response->getFriends()->first();

        $this->assertElementsAreIndexed($friendsCollection, $firstFriendOfCollection, [0 => 'getUser', 1 => 'getLdid']);

        $this->assertIsProfile($firstFriendOfCollection);
    }

    private function assertIsProfile($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Users\Profile', $object);

        $this->assertObjectHasAttribute('user', $object);
        $this->assertObjectHasAttribute('sportIds', $object);
        $this->assertObjectHasAttribute('totals', $object);

        $this->assertInternalType('array', $object->getSportIds());
    }

}
