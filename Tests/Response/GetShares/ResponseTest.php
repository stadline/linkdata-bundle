<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetShares;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetSharesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetSharesResponse() // All is not tested
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

        $this->assertObjectHasAttribute('token', $object);
        $this->assertObjectHasAttribute('type', $object);
        $this->assertObjectHasAttribute('level', $object);
        $this->assertObjectHasAttribute('globalChallenge', $object);
        $this->assertObjectHasAttribute('challenge', $object);
        $this->assertObjectHasAttribute('activity', $object);
        $this->assertObjectHasAttribute('statistics', $object);

        //$this->assertIsGlobalChallenge($object->getGlobalChallenge()); Not in XML data
        //$this->assertIsChallenge($object->getChallenge()); Not in XML data
        $this->assertIsActivity($object->getActivity());
        //$this->assertIsStatistics($object->getStatistics()); Not in XML data
    }

    private function assertIsGlobalChallenge($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Shares\GlobalChallenge', $object);
    }

    private function assertIsChallenge($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Shares\Challenge', $object);
    }

    private function assertIsActivity($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Shares\Activity', $object);

        // No time remaining to test sub elements
    }

    private function assertIsStatistics($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Shares\Statistics', $object);
    }

}
