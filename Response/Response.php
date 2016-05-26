<?php

namespace Geonaute\LinkdataBundle\Response;

use Geonaute\LinkdataBundle\Entity\Common\Meta;
use Geonaute\LinkdataBundle\Visitor\XmlDeserializationVisitor;
use Guzzle\Service\Command\OperationCommand;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;

abstract class Response
{

    /**
     * @Serializer\SerializedName("META")
     * @Serializer\Type("Geonaute\LinkdataBundle\Entity\Common\Meta")
     *
     * @var Meta
     */
    protected $meta;

    /**
     * @param OperationCommand $command
     * @return mixed
     */
//    public static function fromCommand(OperationCommand $command)
//    {
//        if($command->getResponse()->getStatusCode() == 204) {
//            return new EmptyResponse();
//        }
//
//        $xml = $command->getResponse()->xml()->asXML();
//        $operationName = ucfirst($command->getName());
//
//        $builder = SerializerBuilder::create();
//        $builder->addDefaultHandlers();
//        $builder->setDeserializationVisitor(
//            'xml',
//            new XmlDeserializationVisitor(
//                new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy())
//            )
//        );
//
//        $serializer = $builder->build();
//        $response = $serializer->deserialize($xml, 'Geonaute\\LinkdataBundle\\Response\\' . $operationName . '\\Response', 'xml');
//
//        return $response;
//    }
}
