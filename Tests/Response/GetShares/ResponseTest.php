<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetShares;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetSharesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetSharesResponse()
    {
        $serializer = $this->getSerializer();

        $sharesClientMock = new GetSharesMock($serializer);

        $response = $sharesClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('share', $response);

        $this->assertIsSharesShare($response->getShare());
    }

    private function assertIsSharesShare($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Shares\SharesShare", $object);

        // No time remaining to test sub elements
    }

}
