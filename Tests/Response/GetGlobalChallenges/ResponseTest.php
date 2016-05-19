<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetGlobalChallenges;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetGlobalChallengesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetGlobalChallengesResponse()
    {
        $serializer = $this->getSerializer();

        $globalChallengesClientMock = new GetGlobalChallengesMock($serializer);

        $response = $globalChallengesClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('globalChallenges', $response);

        $globalChallengesCollection = $response->getGlobalChallenges();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $globalChallengesCollection);

        $firstFriendOfCollection = $response->getFriends()->first();

        $this->assertElementsAreIndexed($friendsCollection, $firstFriendOfCollection, 'getToken');

        $this->assertIsProfile($firstFriendOfCollection);
    }

}
