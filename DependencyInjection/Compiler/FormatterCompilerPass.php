<?php

namespace Geonaute\LinkdataBundle\DependencyInjection\Compiler;

use Geonaute\LinkdataBundle\DependencyInjection\Helpers\SimpleCompilerPass;

/**
 * Description of FormatterCompilerPass
 *
 * @author alexandre
 */
class FormatterCompilerPass extends SimpleCompilerPass
{
    protected function processConfig(array $config)
    {
        if ($config['formatter']['enabled']) {
            $this->define('geonaute_linkdata.formatter', array(
                'class' => 'Geonaute\LinkdataBundle\Formatter\FormatterManager',
                'arguments' => array($this->get('translator')),
            ));

            $this->alias('geonaute_linkdata.datatype.utils', 'geonaute_linkdata.formatter');
        }
    }
}
