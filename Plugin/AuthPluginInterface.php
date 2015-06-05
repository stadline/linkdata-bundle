<?php

namespace Geonaute\LinkdataBundle\Plugin;

/**
 * Interface AuthPluginInterface
 * @deprecated, use \Geonaute\LinkdataBundle\Auth\RequestKeyProvider instead
 */
interface AuthPluginInterface
{
    public function getSwarmRequestKey();
}
