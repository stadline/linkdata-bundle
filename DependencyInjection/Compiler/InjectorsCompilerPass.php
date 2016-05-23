<?php

namespace Geonaute\LinkdataBundle\DependencyInjection\Compiler;

use Geonaute\LinkdataBundle\DependencyInjection\Helpers\SimpleCompilerPass;

/**
 * Description of InjectorsCompilerPass
 *
 * @author alexandre
 */
class InjectorsCompilerPass extends SimpleCompilerPass
{
    protected function processConfig(array $config)
    {
        $this->define('geonaute_linkdata.request_injector', array(
            'class' => 'Geonaute\LinkdataBundle\Injector\RequestInjector',
            'arguments' => array($this->get('service_container')),
        ));
        // Add alias for retrocompatibility
        if (!$this->container->hasDefinition("request_injector")) {
            $this->alias("request_injector", "geonaute_linkdata.request_injector");
        }

        $this->define('geonaute_linkdata.locale_injector', array(
            'class' => 'Geonaute\LinkdataBundle\Injector\LocaleInjector',
            'arguments' => array($this->get('service_container')),
        ));
        // Add alias for retrocompatibility
        if (!$this->container->hasDefinition("locale_injector")) {
            $this->alias("locale_injector", "geonaute_linkdata.locale_injector");
        }
    }
}
