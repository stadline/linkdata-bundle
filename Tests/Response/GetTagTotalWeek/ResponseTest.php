<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetTagTotalWeek;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetTagTotalWeekMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetTagTotalWeekResponse()
    {
        $serializer = $this->getSerializer();

        $tagTotalWeekClientMock = new GetTagTotalWeekMock($serializer);

        $response = $tagTotalWeekClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('totalWeek', $response);

        $this->assertIsTotalWeek($response->getTotalWeek());
    }

    private function assertIsTotalWeek($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Tag\TotalWeek", $object);

        // No time remaining to test sub elements
    }

}
