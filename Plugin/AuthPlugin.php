<?php

namespace Geonaute\LinkdataBundle\Plugin;

use Geonaute\LinkdataBundle\Auth\RequestKeyProvider;
use Geonaute\LinkdataBundle\Injector\RequestInjector;
use Guzzle\Common\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class AuthPlugin implements EventSubscriberInterface
{
    /**
     * @var TokenStorageInterface
     */
    private $securityContext;
    private $requestInjector;

    private $logger;

    /**
     * @var RequestKeyProvider[]
     */
    private $providers;

    public function __construct(TokenStorageInterface $securityContext, RequestInjector $requestInjector)
    {
        $this->securityContext = $securityContext;
        $this->requestInjector = $requestInjector;
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
        // get request object
        $request = $event['request'];

        // Add header only if not currently defined
        if (!empty($request->getHeader('Authorization'))) {
            return;
        }

        $this->logger->debug("[Guzzle Linkdata ] call : URI : ".$request->getUrl().' METHOD : '.$request->getMethod());

        // add HTTP authentification header
        if ($securityToken = $this->securityContext->getToken()) {

            if ($securityToken instanceof AuthPluginInterface) {
                $requestKey = $securityToken->getSwarmRequestKey();

                $request->setHeader('Authorization', "Bearer ".$requestKey);
            }
        } elseif ($this->requestInjector->getRequest()) {
            $user = $this->requestInjector->getRequest()->get('user');

            $request->setHeader('Authorization', isset($user['token']) ? "Bearer ".$user['token'] : null);
        }
    }

    public function setLogger($logger) {
        $this->logger = $logger;
    }
}
