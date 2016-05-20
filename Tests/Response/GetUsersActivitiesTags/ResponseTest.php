<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersActivitiesTags;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersActivitiesTagsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersActivitiesTagsResponse()
    {
        $serializer = $this->getSerializer();

        $usersActivitiesTagsClientMock = new GetUsersActivitiesTagsMock($serializer);

        $response = $usersActivitiesTagsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('tags', $response);

        $tagsCollection = $response->getTags();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $tagsCollection);

        $firstTagOfCollection = $tagsCollection->first();

        $this->assertElementsAreIndexed($tagsCollection, 'getName');

        $this->assertIsActivitiesTag($firstTagOfCollection);
    }

}
