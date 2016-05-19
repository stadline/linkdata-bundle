<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersConnectedDevices;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersMeasuresGoalMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersMeasuresGoalResponse()
    {
        $serializer = $this->getSerializer();

        $usersMeasuresGoalClientMock = new GetUsersMeasuresGoalMock($serializer);

        $response = $usersMeasuresGoalClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('measuresGoal', $response);

        $this->assertIsMeasureGoal($response->getMeasuresGoal());
    }

    public function assertIsMeasureGoal($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\MeasuresGoal", $object);

        // No time remaining to test sub elements
    }

}
