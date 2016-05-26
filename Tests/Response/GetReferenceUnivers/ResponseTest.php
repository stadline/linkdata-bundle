<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetReferenceUnivers;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetReferenceUniversMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetReferenceUniversResponse()
    {
        $serializer = $this->getSerializer();

        $referenceUniversClientMock = new GetReferenceUniversMock();

        $response = $referenceUniversClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('universList', $response);

        $universCollection = $response->getUniversList();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $universCollection);

        $firstUniversOfCollection = $universCollection->first();

        $this->assertElementsAreIndexed($universCollection, 'getId');

        $this->assertIsUnivers($firstUniversOfCollection);
    }

    private function assertIsUnivers($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Reference\Univers", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('name', $object);
    }

}
