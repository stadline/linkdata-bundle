<?php

namespace Geonaute\LinkdataBundle\Listener;

use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\ObjectEvent;
use Geonaute\LinkdataBundle\Entity\ClientAwareInterface;

class SerializerEventSubscriber implements EventSubscriberInterface
{
    protected $client;

    public function setClient($client)
    {
        $this->client = $client;
    }

    public static function getSubscribedEvents()
    {
        return array(
            array(
                'event' => 'serializer.post_deserialize',
                'method' => 'onPostDeserialize'
            ),
        );
    }

    public function onPostDeserialize(ObjectEvent $event)
    {
        if ($event->getObject() instanceof ClientAwareInterface) {
            $event->getObject()->setClient($this->client);
        }
    }
}

