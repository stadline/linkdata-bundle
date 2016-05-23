<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersFriendsActivity;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersFriendsActivityMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersFriendsActivityResponse() // All is not tested
    {
        $serializer = $this->getSerializer();

        $usersFriendsActivityClientMock = new GetUsersFriendsActivityMock($serializer);

        $response = $usersFriendsActivityClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('publicActivity', $response);

        $this->assertIsPublicActivity($response->getPublicActivity());
    }

    private function assertIsPublicActivity($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Friends\PublicActivity", $object);

        $this->assertObjectHasAttribute('activity', $object);
        $this->assertObjectHasAttribute('token', $object);

        $this->assertIsActivity($object->getActivity());
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
        //$this->assertIsAbout($object->getAbout());
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

}
