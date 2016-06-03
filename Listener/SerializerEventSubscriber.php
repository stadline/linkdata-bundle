<?php

namespace Geonaute\LinkdataBundle\Listener;

use Geonaute\LinkdataBundle\Hydrator\HydratableInterface;
use Geonaute\LinkdataBundle\Hydrator\LinkdataHydrator;
use Geonaute\LinkdataBundle\Plugin\CachedClient;
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
     * @param CachedClient $client
     */
    public function setClient(CachedClient $client)
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
            array(
                'event' => 'serializer.pre_deserialize',
                'method' => 'onPreDeserialize'
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

    /**
     * @param PreDeserializeEvent $event
     */
    public function onPreDeserialize(PreDeserializeEvent $event)
    {
        $mapping = array(
            "Geonaute\\LinkdataBundle\\Entity\\Activity\\SimilarActivity" => "Geonaute\\LinkdataBundle\\Decorator\\Entity\\Activity\\HydratableSimilarActivity",
            "Geonaute\\LinkdataBundle\\Entity\\Activity\\SummaryActivity" => "Geonaute\\LinkdataBundle\\Decorator\\Entity\\Activity\\HydratableSummaryActivity",
            "Geonaute\\LinkdataBundle\\Entity\\Activity\\FullActivity" => "Geonaute\\LinkdataBundle\\Decorator\\Entity\\Activity\\HydratableFullActivity",
            "Geonaute\\LinkdataBundle\\Entity\\Common\\Value" => "Geonaute\\LinkdataBundle\\Decorator\\Entity\\Common\\HydratableValue",
            "Geonaute\\LinkdataBundle\\Entity\\Common\\FakeValue" => "Geonaute\\LinkdataBundle\\Decorator\\Entity\\Common\\HydratableFakeValue",
            "Geonaute\\LinkdataBundle\\Entity\\Users\\ActivitiesSport" => "Geonaute\\LinkdataBundle\\Decorator\\Entity\\Users\\HydratableActivitiesSport",
            "Geonaute\\LinkdataBundle\\Entity\\Users\\Activity" => "Geonaute\\LinkdataBundle\\Decorator\\Entity\\Users\\HydratableActivity",
            "Geonaute\\LinkdataBundle\\Entity\\Common\\GlobalChallenge" => "Geonaute\\LinkdataBundle\\Decorator\\Entity\\Common\\HydratableGlobalChallenge",
            "Geonaute\\LinkdataBundle\\Entity\\Shares\\GlobalChallenge" => "Geonaute\\LinkdataBundle\\Decorator\\Entity\\Shares\\HydratableGlobalChallenge",
            "Geonaute\\LinkdataBundle\\Entity\\Users\\GlobalChallenge" => "Geonaute\\LinkdataBundle\\Decorator\\Entity\\Users\\HydratableGlobalChallenge",
            "Geonaute\\LinkdataBundle\\Entity\\GlobalChallenge\\GlobalChallenge" => "Geonaute\\LinkdataBundle\\Decorator\\Entity\\GlobalChallenge\\HydratableGlobalChallenge",
        );

        $class = $event->getType()["name"];

        if (isset($mapping[$class])) {
            $event->setType($mapping[$class], $event->getType()["params"]);
        }
    }
}
