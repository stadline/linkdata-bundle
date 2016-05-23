<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersTotalYear;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersTotalYearMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersTotalYearResponse()
    {
        $serializer = $this->getSerializer();

        $usersTotalYearClientMock = new GetUsersTotalYearMock($serializer);

        $response = $usersTotalYearClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('totalYear', $response);

        $this->assertIsUsersTotalYearTotalYear($response->getTotalYear());
    }

}
