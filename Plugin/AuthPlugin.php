<?php

namespace Geonaute\LinkdataBundle\Plugin;

use Geonaute\LinkdataBundle\Auth\RequestKeyProvider;
use Guzzle\Common\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AuthPlugin implements EventSubscriberInterface
{
    /**
     * @var RequestKeyProvider[]
     */
    private $providers;

    public function __construct()
    {
        $this->providers = array();
    }

    /**
     * @param array $providers
     */
    public function setProviders($providers)
    {
        $this->providers = array();

        foreach ($providers as $provider) {
            $this->addProvider($provider);
        }
    }

    /**
     * @param RequestKeyProvider $provider
     */
    public function addProvider(RequestKeyProvider $provider)
    {
        $this->providers[] = $provider;
    }

    /**
     * @return array
     */
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
        /** @var \Guzzle\Http\Message\Request $request */
        $request = $event['request'];

        // add HTTP authentication header
        foreach ($this->providers as $provider) {
            $requestKey = $provider->getRequestKey();

            if (!empty($requestKey)) {
                $request->setHeader('X-Linkdata-RequestKey', $requestKey);
                break;
            }
        }

        $request->setHeader('X-Linkdata-RequestKey', null);
    }
}
