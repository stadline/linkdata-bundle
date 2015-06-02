<?php

namespace Geonaute\LinkdataBundle\Plugin;

use Geonaute\LinkdataBundle\Injector\RequestInjectorInterface;
use Guzzle\Common\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;

class AuthPlugin implements EventSubscriberInterface
{
    private $securityContext;
    private $requestInjector;

    public function __construct(SecurityContextInterface $securityContext, RequestInjectorInterface $requestInjector)
    {
        $this->securityContext = $securityContext;
        $this->requestInjector = $requestInjector;
    }

    public static function getSubscribedEvents()
    {
        return array(
            'request.before_send' => 'onRequestBeforeSend',
        );
    }

    /**
     * Request before-send event handler
     *
     * @param Event $event Event received
     */
    public function onRequestBeforeSend(Event $event)
    {
        // get request object
        $request = $event['request'];

        // add HTTP authentification header
        if ($securityToken = $this->securityContext->getToken()) {
        	
            if ($securityToken instanceof AuthPluginInterface) {
                $requestKey = $securityToken->getSwarmRequestKey();

                $request->addHeaders(array(
                    'x-linkdata-requestkey' => $requestKey,
                ));
            }
        } else {
            $user = $this->requestInjector->getRequest()->get('user');

            $request->addHeaders(array(
                'x-linkdata-requestkey' => isset($user['token']) ? $user['token'] : null,
            ));
        }
    }
}
