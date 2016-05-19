<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetTagTotalYear;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetTagTotalYearMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetTagTotalYearResponse()
    {
        $serializer = $this->getSerializer();

        $tagTotalYearClientMock = new GetTagTotalYearMock($serializer);

        $response = $tagTotalYearClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('totalYear', $response);

        $this->assertIsTotalYear($response->getTotalYear());
    }

    private function assertIsTotalYear($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Tag\TotalYear", $object);

        // No time remaining to test sub elements
    }

}
