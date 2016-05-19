<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersConnectedDevices;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersRoutesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersRoutesResponse()
    {
        $serializer = $this->getSerializer();

        $usersRoutesClientMock = new GetUsersRoutesMock($serializer);

        $response = $usersRoutesClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('routes', $response);

        $routesCollection = $response->getRoutes();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $routesCollection);

        $firstRouteOfCollection = $routesCollection->first();

        $this->assertIsRoute($firstRouteOfCollection);
    }

    public function assertIsRoute($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Common\Route", $object);

        // No time remaining to test sub elements
    }

}
