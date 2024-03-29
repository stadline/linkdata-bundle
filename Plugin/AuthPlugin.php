<?php

namespace Geonaute\LinkdataBundle\Plugin;

use Geonaute\LinkdataBundle\Auth\RequestKeyProvider;
use Geonaute\LinkdataBundle\Injector\RequestInjector;
use Guzzle\Common\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Tests\Logger;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class AuthPlugin implements EventSubscriberInterface
{
    /**
     * @var TokenStorageInterface
     */
    private $securityContext;
    private $requestInjector;

    /** @var string */
    private $jwtToken = null;

    /** @var Logger */
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
     * @param string $jwtToken
     */
    public function setJwtToken($jwtToken)
    {
        $this->jwtToken = $jwtToken;
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

        $this->logger->debug("[Guzzle Linkdata ] call : URI : " . $request->getUrl() . ' METHOD : ' . $request->getMethod());

        // add HTTP authentification header
        if ($this->jwtToken !== null) {
            $request->setHeader('Authorization', 'Bearer ' .$this->jwtToken);
        } elseif ($securityToken = $this->securityContext->getToken()) {

            if ($securityToken instanceof AuthPluginInterface) {
                $requestKey = $securityToken->getSwarmRequestKey();

                $request->setHeader('Authorization', "Bearer " . $requestKey);
            }
        } elseif ($this->requestInjector->getRequest()) {
            $user = $this->requestInjector->getRequest()->get('user');
            $token = $this->requestInjector->getRequest()->get('token');
            if (empty($token) && isset($user['token'])) {
                $token = $user['token'];
            }

            $request->setHeader('Authorization', isset($token) ? "Bearer " . $token : null);
        }
    }

    public function setLogger($logger)
    {
        $this->logger = $logger;
    }
}
