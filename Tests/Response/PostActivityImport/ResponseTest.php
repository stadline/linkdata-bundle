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

        // No time remaining to test sub elementss
    }
}
