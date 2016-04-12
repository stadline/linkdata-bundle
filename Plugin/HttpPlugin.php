<?php

namespace Geonaute\LinkdataBundle\Plugin;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Guzzle\Common\Event;

class HttpPlugin implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'client.create_request' => 'onClientCreateRequest',
        );
    }

    /**
     * Client create-request event handler
     *
     * @param Event $event Event received
     */
    public function onClientCreateRequest(Event $event)
    {
        $event['request']->setProtocolVersion('1.0');
    }
}
