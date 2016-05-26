<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersMeasures;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersMeasuresMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersMeasuresResponse()
    {
        $serializer = $this->getSerializer();

        $usersMeasuresClientMock = new GetUsersMeasuresMock();

        $response = $usersMeasuresClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('measures', $response);

        $measuresCollection = $response->getMeasures();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $measuresCollection);

        $firstMeasureOfCollection = $measuresCollection->first();

        $this->assertElementsAreIndexed($measuresCollection, 'getUnitId');

        $this->assertIsMeasureInUsersDirectory($firstMeasureOfCollection);
    }

}
