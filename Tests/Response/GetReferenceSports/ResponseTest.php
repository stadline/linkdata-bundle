<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetReferenceSports;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetReferenceSportsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetReferenceSportsResponse()
    {
        $serializer = $this->getSerializer();

        $referenceSportsClientMock = new GetReferenceSportsMock();

        $response = $referenceSportsClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('sports', $response);

        $sportsCollection = $response->getSports();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $sportsCollection);

        $firstSportOfCollection = $sportsCollection->first();

        $this->assertElementsAreIndexed($sportsCollection, 'getId');
        $this->assertArrayIsSorted($sportsCollection->toArray(), 'getName');

        $this->assertIsSport($firstSportOfCollection);
    }

    public function assertIsSport($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Reference\Sport", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('name', $object);
        $this->assertObjectHasAttribute('universId', $object);
    }

}
