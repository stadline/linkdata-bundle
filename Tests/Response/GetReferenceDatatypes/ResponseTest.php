<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetReferenceDatatypes;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetReferenceDatatypesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetReferenceDatatypesResponse()
    {
        $serializer = $this->getSerializer();

        $referenceDatatypesClientMock = new GetReferenceDatatypesMock();

        $response = $referenceDatatypesClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('datatypes', $response);

        $datatypesCollection = $response->getDatatypes();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $datatypesCollection);

        $firstDatatypeOfCollection = $datatypesCollection->first();

        $this->assertElementsAreIndexed($datatypesCollection, 'getId');

        $this->assertIsDatatype($firstDatatypeOfCollection);
    }

    private function assertIsDatatype($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Reference\Datatype", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('name', $object);
        $this->assertObjectHasAttribute('unit', $object);
        $this->assertObjectHasAttribute('cumulable', $object);
    }

}
