<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetReferenceDatatypes;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetReferenceDatatypesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetReferenceDatatypesResponse()
    {
        $serializer = $this->getSerializer();

        $referenceDatatypesClientMock = new GetReferenceDatatypesMock($serializer);

        $response = $referenceDatatypesClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('datatypes', $response);

        $datatypesCollection = $response->getDatatypes();
var_dump($datatypesCollection);
        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $datatypesCollection);

        $firstDatatypeOfCollection = $datatypesCollection->first();

        $this->assertElementsAreIndexed($datatypesCollection, $firstDatatypeOfCollection, 'getId');

        $this->assertIsDatatype($firstDatatypeOfCollection);
    }

    private function assertIsDatatype($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Reference\Datatype", $object);

        // No time remaining to test sub elements
    }

}
