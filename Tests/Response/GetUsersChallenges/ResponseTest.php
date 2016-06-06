<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersChallenges;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersChallengesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersChallengesResponse()
    {
        $serializer = $this->getSerializer();

        $usersChallengesClientMock = new GetUsersChallengesMock();

        $response = $usersChallengesClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('challenges', $response);

        $challengesCollection = $response->getChallenges();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $challengesCollection);

        $firstChallengeOfCollection = $challengesCollection->first();

        $this->assertElementsAreIndexed($challengesCollection, 'getToken');

        $this->assertIsChallenge($firstChallengeOfCollection);
    }

    private function assertIsChallenge($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Common\Challenge", $object);

        $this->assertObjectHasAttribute('token', $object);
        $this->assertObjectHasAttribute('name', $object);
        $this->assertObjectHasAttribute('categoryId', $object);
        $this->assertObjectHasAttribute('modelId', $object);
        $this->assertObjectHasAttribute('result', $object);
        $this->assertObjectHasAttribute('target', $object);
        $this->assertObjectHasAttribute('targetUnitId', $object);
        $this->assertObjectHasAttribute('current', $object);
        $this->assertObjectHasAttribute('startedAt', $object);
        $this->assertObjectHasAttribute('endedAt', $object);
    }

}
