<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersProfile;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersProfileMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersProfileResponse()
    {
        $serializer = $this->getSerializer();

        $usersProfileClientMock = new GetUsersProfileMock();

        $response = $usersProfileClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('user', $response);

        $this->assertIsProfileUser($response->getUser());
    }

    private function assertIsProfileUser($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\ProfileUser", $object);

        $this->assertObjectHasAttribute('firstName', $object);
        $this->assertObjectHasAttribute('lastName', $object);
        $this->assertObjectHasAttribute('ldid', $object);
        $this->assertObjectHasAttribute('country', $object);
        $this->assertObjectHasAttribute('language', $object);
    }

}
