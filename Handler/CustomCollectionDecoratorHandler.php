<?php

namespace Geonaute\LinkdataBundle\Handler;

use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\VisitorInterface;
use JMS\Serializer\Context;
use Doctrine\Common\Collections\Collection;

class CustomCollectionDecoratorHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods()
    {
        $methods = array();
        $methods[] = array(
            'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
            'type' => 'CollectionDecorator',
            'format' => 'xml',
            'method' => 'deserializeCollection',
        );
        $methods[] = array(
            'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
            'type' => 'CollectionDecorator',
            'format' => 'json',
            'method' => 'serializeCollection',
        );

        return $methods;
    }

    public function deserializeCollection(VisitorInterface $visitor, $data, array $type, Context $context)
    {
        $type['name'] = 'array';
        $collectionDecoratorClass = array_shift($type["params"])["name"];
        return new $collectionDecoratorClass($visitor->visitArray($data, $type, $context));
    }


    public function serializeCollection(VisitorInterface $visitor, Collection $collection, array $type, Context $context)
    {
        $type['name'] = 'array';

        return $visitor->visitArray($collection->toArray(), $type, $context);
    }
}
