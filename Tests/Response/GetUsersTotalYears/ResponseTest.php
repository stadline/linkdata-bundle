<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersTotalYears;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersTotalYearsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersTotalYearsResponse()
    {
        $serializer = $this->getSerializer();

        $usersTotalYearsClientMock = new GetUsersTotalYearsMock($serializer);

        $response = $usersTotalYearsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('totalYears', $response);

        $totalYearsCollection = $response->getTotalYears();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $totalYearsCollection);

        $firstTotalYearOfCollection = $totalYearsCollection->first();

        $this->assertElementsAreIndexed($totalYearsCollection, 'getYear');

        $this->assertIsUsersTotalYearTotalYear($firstTotalYearOfCollection);

    }

}
