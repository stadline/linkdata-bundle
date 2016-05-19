<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersConnectedDevices;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersConnectedDevicesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersConnectedDevicesResponse()
    {
        $serializer = $this->getSerializer();

        $usersConnectedDevicesClientMock = new GetUsersConnectedDevicesMock($serializer);

        $response = $usersConnectedDevicesClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('connectedDevices', $response);

        $connectedDevicesCollection = $response->getConnectedDevices();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $connectedDevicesCollection);

        $firstConnectedDeviceOfCollection = $connectedDevicesCollection->first();

        $this->assertElementsAreIndexed($connectedDevicesCollection, $firstConnectedDeviceOfCollection, 'getId');

        $this->assertIsConnectedDevice($firstConnectedDeviceOfCollection);
    }

    private function assertIsConnectedDevice($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\ConnectedDevice", $object);

        // No time remaining to test sub elements
    }

}
