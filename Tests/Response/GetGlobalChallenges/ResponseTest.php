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

        $firstGlobalChallengeOfCollection = $globalChallengesCollection->first();

        $this->assertElementsAreIndexed($globalChallengesCollection, $firstGlobalChallengeOfCollection, 'getToken');

        $this->assertIsGlobalChallenge($firstGlobalChallengeOfCollection);
    }

    private function assertIsGlobalChallenge($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\GlobalChallenge\GlobalChallenge", $object);

        // No time remaining to test sub elements
    }

}
