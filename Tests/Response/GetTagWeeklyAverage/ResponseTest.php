<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetTagWeeklyAverage;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetTagWeeklyAverageMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetTagWeeklyAverageResponse()
    {
        $serializer = $this->getSerializer();

        $tagWeeklyAverageClientMock = new GetTagWeeklyAverageMock($serializer);

        $response = $tagWeeklyAverageClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('weeklyAverage', $response);

        $this->assertIsWeeklyAverage($response->getWeeklyAverage());
    }

    private function assertIsWeeklyAverage($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Tag\WeeklyAverage", $object);

        // No time remaining to test sub elements
    }

}
