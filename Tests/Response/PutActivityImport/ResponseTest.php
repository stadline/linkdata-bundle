<?php

namespace Geonaute\LinkdataBundle\Tests\Response\PutActivityImport;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\PutActivityImportMock;

class ResponseTest extends ResponseTestCase
{

    public function testPutActivityImportResponse()
    {
        $serializer = $this->getSerializer();

        $activityImportClientMock = new PutActivityImportMock($serializer);

        $response = $activityImportClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
    }

}
