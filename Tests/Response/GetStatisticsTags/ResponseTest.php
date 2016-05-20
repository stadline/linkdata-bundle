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

        $this->assertObjectHasAttribute('tags', $object);
        $this->assertObjectHasAttribute('version', $object);
        $this->assertObjectHasAttribute('calculatedAt', $object);

        $tagsCollection = $object->getTags();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $tagsCollection);

        $firstTagOfCollection = $tagsCollection->first();

        $this->assertElementsAreIndexed($tagsCollection, $firstTagOfCollection, 'getName');

        $this->assertIsTag($firstTagOfCollection);
    }

    private function assertIsTag($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Statistic\Tag', $object);

        $this->assertObjectHasAttribute('name', $object);
    }

}
