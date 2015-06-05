<?php

namespace Geonaute\LinkdataBundle\Auth;

use Geonaute\LinkdataBundle\Injector\RequestInjectorInterface;
use Symfony\Component\HttpFoundation\Request;

class RequestProvider implements RequestKeyProvider
{
    private $requestInjector;

    public function __construct(RequestInjectorInterface $requestInjector)
    {
        $this->requestInjector = $requestInjector;
    }

    public function getRequestKey()
    {
        $request = $this->requestInjector->getRequest();

        if ($request instanceof Request) {
            $user = $request->get('user');

            return isset($user['token']) ? $user['token'] : null;
        }
    }
}
