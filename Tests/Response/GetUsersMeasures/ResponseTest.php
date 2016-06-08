<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersMeasures;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersMeasuresMock;
use Doctrine\Common\Collections\ArrayCollection;

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

        $this->verifyValuesOfMeasures($measuresCollection);
    }

    /**
     * @param ArrayCollection $measures
     */
    private function verifyValuesOfMeasures(ArrayCollection $measures)
    {
        $measuresArray = $measures->toArray();

        $this->assertArrayHasKey('22', $measuresArray);
        $this->assertArrayHasKey('100', $measuresArray);

        $valuesOfArrayWith22Key = $measuresArray[22]->getValues();

        $this->assertEquals(1, count($valuesOfArrayWith22Key));
        $this->assertArrayHasKey("2011-10-20", $valuesOfArrayWith22Key);
        $this->assertEquals(70, $valuesOfArrayWith22Key['2011-10-20']);

        $valuesOfArrayWith100Key = $measuresArray[100]->getValues();

        // if attribute date only, check it's taken
        $this->assertArrayHasKey("2011-11-06", $valuesOfArrayWith100Key);
        $this->assertEquals(180, $valuesOfArrayWith100Key['2011-11-06']);

        // if attribute updated_time only, check it's taken
        $this->assertArrayHasKey("2011-11-07", $valuesOfArrayWith100Key);
        $this->assertEquals(181, $valuesOfArrayWith100Key['2011-11-07']);

        // Last value of date/updated_time taken
        $this->assertArrayHasKey("2011-11-08", $valuesOfArrayWith100Key);
        $this->assertEquals(184, $valuesOfArrayWith100Key['2011-11-08']);

        // if attribute date and updated_time, check it's date taken
        $this->assertArrayHasKey("2011-11-09", $valuesOfArrayWith100Key);
        $this->assertEquals(185, $valuesOfArrayWith100Key['2011-11-09']);
    }

}
