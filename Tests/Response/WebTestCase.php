<?php

namespace Geonaute\LinkdataBundle\Tests\Response;

use Geonaute\LinkdataBundle\Visitor\XmlDeserializationVisitor;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;

class WebTestCase extends \PHPUnit_Framework_TestCase
{

    public function getSerializer()
    {
        $serializerBuilder = new SerializerBuilder();
        $serializerBuilder->setDeserializationVisitor('xml', new XmlDeserializationVisitor(new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy())));
        $serializer = $serializerBuilder->build();

        return $serializer;
    }

    public function assertElementsAreIndexed(ArrayCollection $arrayCollection, $firstObjectOfCollection, $method = '')
    {
        $firstActivityIndex = $firstObjectOfCollection->$method();

        $this->assertArrayHasKey($firstActivityIndex, $arrayCollection);
        $this->assertEquals($arrayCollection[$firstActivityIndex], $firstObjectOfCollection);
    }

    public function assertIsValue($object)
    {
        $this->assertInstanceOf("Geonaute\LinkdataBundle\Entity\Common\Value", $object);

        $this->assertObjectHasAttribute('id', $object);
        $this->assertObjectHasAttribute('value', $object);
    }
}
