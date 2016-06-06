<?php

namespace Geonaute\LinkdataBundle\Listener;

use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;
use Geonaute\LinkdataBundle\Hydrator\LinkdataHydrator;
use Geonaute\LinkdataBundle\Plugin\CachedClient;
use Guzzle\Service\Client;
use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\ObjectEvent;
use JMS\Serializer\EventDispatcher\PreDeserializeEvent;

class SerializerEventSubscriber implements EventSubscriberInterface
{
    /** @var CachedClient */
    protected $client;

    /** @var LinkdataHydrator */
    private $hydrator;

    /**
     * @param Client $client
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param LinkdataHydrator $hydrator
     */
    public function setHydrator(LinkdataHydrator $hydrator)
    {
        $this->hydrator = $hydrator;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return array(
            array(
                'event' => 'serializer.post_deserialize',
                'method' => 'onPostDeserialize'
            ),
        );
    }

    /**
     * @param ObjectEvent $event
     */
    public function onPostDeserialize(ObjectEvent $event)
    {
        if ($event->getObject() instanceof HydratableInterface) {
            $event->getObject()->setHydrator($this->hydrator);
        }
    }
}
