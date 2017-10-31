<?php

namespace Geonaute\LinkdataBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class LinkdataJwtAutoSignCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $container->getDefinition('geonaute_linkdata.client')->addTag('jwt.security.guzzle.client');
        $container->getDefinition('geonaute_linkdata_community.client')->addTag('jwt.security.guzzle.client');
    }
}
