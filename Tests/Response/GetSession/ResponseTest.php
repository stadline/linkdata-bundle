<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetSession;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetSessionMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetSessionResponse() // All is not tested
    {
        $serializer = $this->getSerializer();

        $sessionClientMock = new GetSessionMock();

        $response = $sessionClientMock->getResponse($serializer, []);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('session', $response);

        $this->assertIsSession($response->getSession());
    }

    private function assertIsSession($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Session\Session", $object);

        $this->assertObjectHasAttribute('token', $object);
        $this->assertObjectHasAttribute('sessionModel', $object);
        $this->assertObjectHasAttribute('activities', $object);

        $this->assertIsSessionModel($object->getSessionModel());
    }

    private function assertIsSessionModel($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Session\SessionModel", $object);

        $this->assertObjectHasAttribute('title', $object);
        $this->assertObjectHasAttribute('description', $object);
        $this->assertObjectHasAttribute('coachAdvice', $object);
        $this->assertObjectHasAttribute('sections', $object);

        $sectionsCollection = $object->getSections();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $sectionsCollection);

        $firstSectionOfCollection = $sectionsCollection->first();

        $this->assertIsSection($firstSectionOfCollection);
    }

    private function assertIsSection($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Session\Section", $object);

        $this->assertObjectHasAttribute('detail', $object);
        $this->assertObjectHasAttribute('limits', $object);

        $limitsCollection = $object->getLimits();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $limitsCollection);

        $firstLimitOfCollection = $limitsCollection->first();

        $this->assertElementsAreIndexed($limitsCollection, 'getId');

        $this->assertIsLimit($firstLimitOfCollection);
    }

    private function assertIsLimit($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Session\Limit", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('value', $object);
    }

}
