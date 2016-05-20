<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersRecors;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersRecordsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersRecordsResponse()
    {
        $serializer = $this->getSerializer();

        $usersRecordsClientMock = new GetUsersRecordsMock($serializer);

        $response = $usersRecordsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('sports', $response);

        $recordsSportsCollection = $response->getSports();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $recordsSportsCollection);

        $firstRecordsSportOfCollection = $recordsSportsCollection->first();

        $this->assertIsRecordsSport($firstRecordsSportOfCollection);
    }

    public function assertIsRecordsSport($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\RecordsSport", $object);

        $this->assertObjectHasAttribute('records', $object);

        $recordsCollection = $object->getRecords();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $recordsCollection);

        $firstRecordOfCollection = $recordsCollection->first();

        $this->assertElementsAreIndexed($recordsCollection, 'getId');

        $this->assertIsRecord($firstRecordOfCollection);
    }

    private function assertIsRecord($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\Record", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('value', $object);
        $this->assertObjectHasAttribute('date', $object);
        $this->assertObjectHasAttribute('activityToken', $object);

        $this->assertNotNull($object->getId());
        $this->assertNotInstanceOf('Geonaute\LinkdataBundle\Entity\Common\Value', $object->getValue());
    }

}
