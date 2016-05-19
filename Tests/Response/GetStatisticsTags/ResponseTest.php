<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetStatisticsTags;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetStatisticsTagsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetStatisticsTagsResponse()
    {
        $serializer = $this->getSerializer();

        $statisticsTagsClientMock = new GetStatisticsTagsMock($serializer);

        $response = $statisticsTagsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('statistics', $response);

        $statisticsTagsCollection = $response->getStatistics();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $statisticsTagsCollection);

        $firstStatisticsTagOfCollection = $statisticsTagsCollection->first();

        $this->assertIsStatistic($firstStatisticsTagOfCollection);
    }

    private function assertIsStatistic($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Statistic\Statistic", $object);

        // No time remaining to test sub elements
    }

}
