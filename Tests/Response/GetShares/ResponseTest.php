<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetShares;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetSharesMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetSharesResponse() // All is not tested
    {
        $serializer = $this->getSerializer();

        $sharesClientMock = new GetSharesMock();

        $response = $sharesClientMock->getResponse($serializer, []);

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

        $this->assertObjectHasAttribute('user', $object);
        $this->assertObjectHasAttribute('sport', $object);
        $this->assertObjectHasAttribute('deviceModel', $object);
        $this->assertObjectHasAttribute('dataStream', $object);
        $this->assertObjectHasAttribute('dataSummary', $object);
        $this->assertObjectHasAttribute('track', $object);
        $this->assertObjectHasAttribute('startDate', $object);
        $this->assertObjectHasAttribute('timezone', $object);
        $this->assertObjectHasAttribute('duration', $object);
        $this->assertObjectHasAttribute('libelle', $object);
        $this->assertObjectHasAttribute('latitude', $object);
        $this->assertObjectHasAttribute('longitude', $object);
        $this->assertObjectHasAttribute('elevation', $object);
        $this->assertObjectHasAttribute('about', $object);

        $this->assertIsUser($object->getUser());
        $this->assertIsSport($object->getSport());
        $this->assertIsDeviceModel($object->getDeviceModel());
        $this->assertIsDataStream($object->getDataStream());
        $this->assertIsDataSummary($object->getDataSummary());
        $this->assertIsTrack($object->getTrack());
        //$this->assertIsAbout($object->getAbout()); Not in XML data
    }

    private function assertIsUser($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Shares\User', $object);

        $this->assertObjectHasAttribute('firstName', $object);
        $this->assertObjectHasAttribute('lastName', $object);
        $this->assertObjectHasAttribute('gender', $object);
        $this->assertObjectHasAttribute('measures', $object);

        $measuresCollection = $object->getMeasures();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $measuresCollection);

        $firstMeasureOfCollection = $measuresCollection->first();

        $this->assertElementsAreIndexed($measuresCollection, 'getUnitId');

        $this->assertIsMeasureInUsersDirectory($firstMeasureOfCollection);
    }

    public function assertIsSport($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Reference\Sport", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('name', $object);
        $this->assertObjectHasAttribute('universId', $object);
    }

    public function assertIsTrack($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Shares\Track', $object);

        $this->assertObjectHasAttribute('locations', $object);

        $trackLocationsArray = $object->getLocations();

        $this->assertInternalType('array', $trackLocationsArray);

        $this->assertIsLocationInTracksDirectory($trackLocationsArray[5000]);
    }

    public function assertIsAbout($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Shares\About', $object);

        // class not adapted yet
    }

    private function assertIsStatistics($object)
    {
        $this->assertInstanceOf('Geonaute\LinkdataBundle\Entity\Shares\Statistics', $object);
    }

}
