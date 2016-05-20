<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersTotalProfile;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersTotalProfileMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersTotalProfileResponse()
    {
        $serializer = $this->getSerializer();

        $usersTotalProfileClientMock = new GetUsersTotalProfileMock($serializer);

        $response = $usersTotalProfileClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('profile', $response);

        $this->assertIsProfile($response->getProfile());
    }

}
