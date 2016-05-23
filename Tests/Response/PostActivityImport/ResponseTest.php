<?php

namespace Geonaute\LinkdataBundle\Tests\Response\PostActivityImport;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\PostActivityImportMock;

class ResponseTest extends ResponseTestCase
{

    public function testPostActivityImportResponse()
    {
        $serializer = $this->getSerializer();

        $activityImportClientMock = new PostActivityImportMock($serializer);

        $response = $activityImportClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('activity', $response);

        $this->assertIsPostActivityImport($response->getActivity());
    }

    private function assertIsPostActivityImport($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Activity\PostImportActivity", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('userId', $object);
        $this->assertObjectHasAttribute('sportId', $object);
        $this->assertObjectHasAttribute('deviceId', $object);
        $this->assertObjectHasAttribute('deviceModelId', $object);
        $this->assertObjectHasAttribute('startDate', $object);
        $this->assertObjectHasAttribute('duration', $object);
        $this->assertObjectHasAttribute('libelle', $object);
        $this->assertObjectHasAttribute('latitude', $object);
        $this->assertObjectHasAttribute('longitude', $object);
        $this->assertObjectHasAttribute('elevation', $object);
        $this->assertObjectHasAttribute('trackId', $object);
        $this->assertObjectHasAttribute('createdAt', $object);
        $this->assertObjectHasAttribute('updateTime', $object);
    }

}
