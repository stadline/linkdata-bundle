<?php

namespace Geonaute\LinkdataBundle\Tests\Response\GetUsersTags;

use Geonaute\LinkdataBundle\Tests\Response\WebTestCase as ResponseTestCase;
use Geonaute\LinkdataBundle\Mock\Model\GetUsersTagsMock;

class ResponseTest extends ResponseTestCase
{

    public function testGetUsersTagsResponse()
    {
        $serializer = $this->getSerializer();

        $usersTagsClientMock = new GetUsersTagsMock($serializer);

        $response = $usersTagsClientMock->getResponse([]);

        $this->assertObjectHasAttribute('meta', $response);
        $this->assertObjectHasAttribute('tags', $response);

        $tagsCollection = $response->getTags();

        $this->assertInstanceOf("Doctrine\Common\Collections\ArrayCollection", $tagsCollection);

        $firstTagOfCollection = $tagsCollection->first();

        $this->assertElementsAreIndexed($tagsCollection, $firstTagOfCollection, 'getName');

        $this->assertIsTag($firstTagOfCollection);
    }

    private function assertIsTag($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Users\Tag", $object);

        $this->assertObjectHasAttribute('name', $object);
    }

}
