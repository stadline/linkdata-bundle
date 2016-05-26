<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetGlobalChallenges;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetGlobalChallengesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetGlobalChallengesResponse()
    {
        $serializer = $this->getSerializer();

        $globalChallengesClientMock = new GetGlobalChallengesMock();

        $response = $globalChallengesClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('globalChallenges', $response);

        $globalChallengesCollection = $response->getGlobalChallenges();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $globalChallengesCollection);

        $firstGlobalChallengeOfCollection = $globalChallengesCollection->first();

        $this->assertElementsAreIndexed($globalChallengesCollection, 'getToken');

        $this->assertIsGlobalChallenge($firstGlobalChallengeOfCollection);
    }

    private function assertIsGlobalChallenge($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\GlobalChallenge\GlobalChallenge", $object);

        $this->assertObjectHasAttribute('token', $object);
        $this->assertObjectHasAttribute('name', $object);
        $this->assertObjectHasAttribute('beforeMessage', $object);
        $this->assertObjectHasAttribute('currentMessage', $object);
        $this->assertObjectHasAttribute('afterMessage', $object);
        $this->assertObjectHasAttribute('publishDate', $object);
        $this->assertObjectHasAttribute('startedAt', $object);
        $this->assertObjectHasAttribute('endedAt', $object);
        $this->assertObjectHasAttribute('result', $object);
        $this->assertObjectHasAttribute('target', $object);
        $this->assertObjectHasAttribute('targetUnitId', $object);
        $this->assertObjectHasAttribute('imageUrl', $object);
        $this->assertObjectHasAttribute('current', $object);
    }

}
