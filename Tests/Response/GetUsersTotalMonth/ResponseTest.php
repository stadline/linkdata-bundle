<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersTotalMonth;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersTotalMonthMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersTotalMonthResponse()
    {
        $serializer = $this->getSerializer();

        $usersTotalMonthClientMock = new GetUsersTotalMonthMock();

        $response = $usersTotalMonthClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('totalMonth', $response);

        $this->assertIsTotalMonth($response->getTotalMonth());
    }

}
