<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersMeasuresGoal;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersMeasuresGoalMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersMeasuresGoalResponse()
    {
        $serializer = $this->getSerializer();

        $usersMeasuresGoalClientMock = new GetUsersMeasuresGoalMock();

        $response = $usersMeasuresGoalClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('measuresGoal', $response);

        $this->assertIsMeasureGoal($response->getMeasuresGoal());
    }

    private function assertIsMeasureGoal($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\MeasuresGoal", $object);

        $this->assertObjectHasAttribute('startedAt', $object);
        $this->assertObjectHasAttribute('datatypeId', $object);
        $this->assertObjectHasAttribute('initial', $object);
        $this->assertObjectHasAttribute('goal', $object);
    }

}
