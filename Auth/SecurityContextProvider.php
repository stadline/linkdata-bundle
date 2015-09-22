<?php

namespace Geonaute\LinkdataBundle\Auth;

use Symfony\Component\Security\Core\SecurityContextInterface;
use Geonaute\LinkdataBundle\Plugin\AuthPluginInterface;

class SecurityContextProvider implements RequestKeyProvider
{
    private $securityContext;

    public function __construct(SecurityContextInterface $securityContext = null)
    {
        $this->securityContext = $securityContext;
    }

    public function getRequestKey()
    {
        if ($this->securityContext && ($securityToken = $this->securityContext->getToken())) {

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
