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
        $this->define('request_injector', array(
            'class' => 'Geonaute\LinkdataBundle\Injector\RequestInjector',
            'arguments' => array($this->get('service_container')),
        ));

        $this->define('locale_injector', array(
            'class' => 'Geonaute\LinkdataBundle\Injector\LocaleInjector',
            'arguments' => array($this->get('service_container')),
        ));
    }
}
