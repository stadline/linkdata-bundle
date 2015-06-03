<?php

namespace Geonaute\LinkdataBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Geonaute\LinkdataBundle\DependencyInjection\Compiler\PluginsCompilerPass;

class GeonauteLinkdataBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new PluginsCompilerPass('geonaute_linkdata'));
    }
}
