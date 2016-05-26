<?php

namespace Geonaute\LinkdataBundle\Tests\Response\PutSharesAdd;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\PutSharesAddMock;

class ResponseTest extends ResponseTestCase
{

    public function testPutSharesAddResponse()
    {
        $serializer = $this->getSerializer();

        $sharesAddClientMock = new PutSharesAddMock();

        $response = $sharesAddClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('share', $response);

        $this->assertIsShare($response->getShare());
    }

    private function assertIsShare($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Shares\Share', $object);

        $this->assertObjectHasAttribute('token', $object);
    }

}
