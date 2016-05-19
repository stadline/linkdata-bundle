<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetOnsMonthlyAverage;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetOnsMonthlyAverageMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetOnsMonthlyAverageResponse()
    {
        $serializer = $this->getSerializer();

        $onsMonthlyAverageClientMock = new GetOnsMonthlyAverageMock($serializer);

        $response = $onsMonthlyAverageClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('ons', $response);

        $this->assertIsOns($response->getOns());
    }

    private function assertIsOns($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Ons\Ons", $object);

        // No time remaining to test sub elements
    }

}
