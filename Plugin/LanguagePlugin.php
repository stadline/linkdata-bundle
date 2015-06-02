<?php

namespace Geonaute\LinkdataBundle\Plugin;

use Geonaute\LinkdataBundle\Injector\LocaleInjectorInterface;
use Guzzle\Common\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class LanguagePlugin implements EventSubscriberInterface
{
    private $localeInjector;

    public function __construct(LocaleInjectorInterface $requestInjector)
    {
        $this->localeInjector = $requestInjector;
    }

    public static function getSubscribedEvents()
    {
        return array(
            'request.before_send' => 'onRequestBeforeSend',
        );
    }

    /**
     * Request before-send event handler.
     *
     * @param Event $event Event received
     */
    public function onRequestBeforeSend(Event $event)
    {
        // get request object
        $request = $event['request'];

        // add language to query parameter
        if (!$request->getQuery()->hasKey('language')) {
            $request->getQuery()->add('language', $this->localeInjector->getLocale());
        }
    }
}
