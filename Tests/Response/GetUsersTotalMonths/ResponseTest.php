<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersTotalMonths;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersTotalMonthsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersTotalMonthsResponse()
    {
        $serializer = $this->getSerializer();

        $usersTotalMonthsClientMock = new GetUsersTotalMonthsMock();

        $response = $usersTotalMonthsClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('totalMonths', $response);

        $totalMonthsCollection = $response->getTotalMonths();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $totalMonthsCollection);

        $firstTotalMonthOfCollection = $totalMonthsCollection->first();

        $this->assertElementsAreIndexed($totalMonthsCollection, 'getMonth');

        $this->assertIsTotalMonth($firstTotalMonthOfCollection);
    }

}
