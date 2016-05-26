<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersGlobalChallenge;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersGlobalChallengeMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersGlobalChallengeResponse()
    {
        $serializer = $this->getSerializer();

        $usersGlobalChallengeClientMock = new GetUsersGlobalChallengeMock();

        $response = $usersGlobalChallengeClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('globalChallenge', $response);

        $this->assertIsGlobalChallenge($response->getGlobalChallenge());
    }

    private function assertIsGlobalChallenge($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\GlobalChallenge", $object);

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
        $this->assertObjectHasAttribute('averageContribution', $object);
        $this->assertObjectHasAttribute('userContribution', $object);
    }

}
