<?php

namespace Geonaute\LinkdataBundle\Auth;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Geonaute\LinkdataBundle\Plugin\AuthPluginInterface;

class SecurityContextProvider implements RequestKeyProvider
{
    private $tokenStorage;

    public function __construct(TokenStorage $tokenStorage = null)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public function getRequestKey()
    {
        if ($this->tokenStorage && ($securityToken = $this->tokenStorage->getToken())) {

            if ($securityToken instanceof RequestKeyProvider) {
                return $securityToken->getRequestKey();
            }

            // old interface
            if ($securityToken instanceof AuthPluginInterface || method_exists($securityToken, 'getSwarmRequestKey')) {
                return $securityToken->getSwarmRequestKey();
            }
        }
    }
}
