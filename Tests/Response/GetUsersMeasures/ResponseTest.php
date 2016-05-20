<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersMeasures;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersMeasuresMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersMeasuresResponse()
    {
        $serializer = $this->getSerializer();

        $usersMeasuresClientMock = new GetUsersMeasuresMock($serializer);

        $response = $usersMeasuresClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('measures', $response);

        $measuresCollection = $response->getMeasures();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $measuresCollection);

        $firstMeasureOfCollection = $measuresCollection->first();

        $this->assertElementsAreIndexed($measuresCollection, $firstMeasureOfCollection, 'getUnitId');

        $this->assertIsMeasure($firstMeasureOfCollection);
    }

    public function assertIsMeasure($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\Measure", $object);

        $this->assertObjectHasAttribute('unitId', $object);
    }

}
