<?php

namespace Geonaute\LinkdataBundle\DependencyInjection\Compiler;

/**
 * Description of PluginsCompilerPass
 *
 * @author alexandre
 */
class PluginsCompilerPass extends SimpleCompilerPass
{
    protected function processConfig(array $config)
    {
        if ($config['plugins']['cache']['enabled']) {
            $this->loadCachePlugin($config['plugins']['cache']);
        }
    }

    protected function loadCachePlugin(array $config)
    {
        # storage
        $this->register('geonaute_linkdata.cache.doctrine_adapter', array(
            'class' => '%guzzle.cache.doctrine.class%',
            'arguments' => array( $this->get($config['storage']['adapter']) ),
        ));

        $this->register('geonaute_linkdata.cache.storage', array(
            'class' => 'Guzzle\Plugin\Cache\DefaultCacheStorage',
            'arguments' => array( $this->get('geonaute_linkdata.cache.doctrine_adapter') ),
        ));

        # can_cache
        $this->register('geonaute_linkdata.cache.can_cache', array(
            'class' => 'Geonaute\LinkdataBundle\Plugin\CanCacheStrategy',
        ));

        # revalidation
        $this->register('geonaute_linkdata.cache.can_cache', array(
            'class' => 'Guzzle\Plugin\Cache\DefaultRevalidation',
            'arguments' => array( $this->get($config['storage']['service']), $this->get($config['can_cache']['service']) ),
        ));
    }
}
