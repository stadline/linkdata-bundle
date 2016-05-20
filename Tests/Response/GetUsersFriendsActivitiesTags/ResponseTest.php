<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersFriendsActivitiesTags;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersFriendsActivitiesTagsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersFriendsActivitiesTagsResponse()
    {
        $serializer = $this->getSerializer();

        $usersFriendsActivitiesTagsClientMock = new GetUsersFriendsActivitiesTagsMock($serializer);

        $response = $usersFriendsActivitiesTagsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('tags', $response);

        $tagsCollection = $response->getTags();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $tagsCollection);

        $firstTagOfCollection = $tagsCollection->first();

        $this->assertElementsAreIndexed($tagsCollection, 'getName');

        $this->assertIsActivitiesTag($firstTagOfCollection);
    }

}
