<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetActivityDataSummary;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetActivityDataSummaryMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetActivityDataSummaryResponse()
    {
        $serializer = $this->getSerializer();

        $activityDataSummaryClientMock = new GetActivityDataSummaryMock($serializer);

        $response = $activityDataSummaryClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('activity', $response);

        $this->assertIsDataSummaryActivity($response->getActivity());
    }

    private function assertIsDataSummaryActivity($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Activity\DataSummaryActivity", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('dataSummary', $object);

        $this->assertIsDataSummary($object->getDataSummary());
    }

}
