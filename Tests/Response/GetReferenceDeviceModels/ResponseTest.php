<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetReferenceDeviceModels;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetReferenceDeviceModelsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetReferenceDeviceModelsResponse()
    {
        $serializer = $this->getSerializer();

        $referenceDeviceModelsClientMock = new GetReferenceDeviceModelsMock($serializer);

        $response = $referenceDeviceModelsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('deviceModels', $response);

        $deviceModelsCollection = $response->getDeviceModels();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $deviceModelsCollection);

        $firstDeviceModelOfCollection = $deviceModelsCollection->first();

        $this->assertElementsAreIndexed($deviceModelsCollection, 'getId');

        $this->assertIsDeviceModel($firstDeviceModelOfCollection);
    }

}
