<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersConnectedDevices;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersGlobalChallengeMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersGlobalChallengeResponse()
    {
        $serializer = $this->getSerializer();

        $usersGlobalChallengeClientMock = new GetUsersGlobalChallengeMock($serializer);

        $response = $usersGlobalChallengeClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('globalChallenge', $response);

        $this->assertIsGlobalChallenge($response->getGlobalChallenge());
    }

    private function assertIsGlobalChallenge($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\GlobalChallenge", $object);

        // No time remaining to test sub elements
    }

}
