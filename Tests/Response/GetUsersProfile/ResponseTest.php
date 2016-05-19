<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersProfile;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersProfileMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersProfileResponse()
    {
        $serializer = $this->getSerializer();

        $usersProfileClientMock = new GetUsersProfileMock($serializer);

        $response = $usersProfileClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('user', $response);

        $this->assertIsProfileUser($response->getUser());
    }

    public function assertIsProfileUser($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\ProfileUser", $object);

        // No time remaining to test sub elements
    }

}
