<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetReferenceSports;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetReferenceSportsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetReferenceSportsResponse()
    {
        $serializer = $this->getSerializer();

        $referenceSportsClientMock = new GetReferenceSportsMock($serializer);

        $response = $referenceSportsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('sports', $response);

        $sportsCollection = $response->getSports();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $sportsCollection);

        $firstSportOfCollection = $sportsCollection->first();

        $this->assertElementsAreIndexed($sportsCollection, $firstSportOfCollection, 'getId');

        $this->assertIsSport($firstSportOfCollection);
    }

    private function assertIsSport($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Reference\Sport", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('name', $object);
        $this->assertObjectHasAttribute('universId', $object);
    }

}
