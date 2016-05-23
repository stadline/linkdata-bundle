<?php

namespace Geonaute\LinkdataBundle\Tests\Response\PostRouteCreate;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\PostRouteCreateMock;

class ResponseTest extends ResponseTestCase
{

    public function testPostRouteCreateResponse()
    {
        $serializer = $this->getSerializer();

        $routeCreateClientMock = new PostRouteCreateMock($serializer);

        $response = $routeCreateClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('route', $response);

        $this->assertIsRoute($response->getRoute());
    }

}
