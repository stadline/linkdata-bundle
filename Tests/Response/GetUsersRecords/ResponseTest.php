<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersConnectedDevices;

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

        // No time remaining to test sub elements
    }

}
