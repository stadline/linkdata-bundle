<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetRoute;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetRouteMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetRouteResponse()
    {
        $serializer = $this->getSerializer();

        $routeClientMock = new GetRouteMock($serializer);

        $response = $routeClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('route', $response);

        $this->assertIsRoute($response->getRoute());
    }

    private function assertIsRoute($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Common\Route", $object);

        // No time remaining to test sub elements
    }

}
