<?php

namespace Geonaute\LinkdataBundle\DependencyInjection\Compiler;

use Geonaute\LinkdataBundle\DependencyInjection\Helpers\SimpleCompilerPass;

/**
 * Description of PluginsCompilerPass
 *
 * @author alexandre
 */
class PluginsCompilerPass extends SimpleCompilerPass
{
    protected function processConfig(array $config)
    {
        $plugins = array(
            'cache' => 'loadCachePlugin',
            'auth' => 'loadAuthPlugin',
            'language' => 'loadLanguagePlugin',
        );

        foreach ($plugins as $key => $method) {
            if ($config['plugins'][$key]['enabled']) {
                $this->$method($config['plugins'][$key]);
            }
        }
    }

    protected function loadCachePlugin(array $config)
    {
        $options = array();

        // storage
        $this->define('geonaute_linkdata.cache.doctrine_adapter', array(
            'class' => '%guzzle.cache.doctrine.class%',
            'arguments' => array($this->get($config['storage']['adapter'])),
        ));

        $this->define('geonaute_linkdata.cache.storage', array(
            'class' => 'Guzzle\Plugin\Cache\DefaultCacheStorage',
            'arguments' => array($this->get('geonaute_linkdata.cache.doctrine_adapter')),
        ));

        if ($config['storage']['enabled']) {
            $options['storage'] = $this->get('geonaute_linkdata.cache.storage');
        }

        // can_cache
        $this->define('geonaute_linkdata.cache.can_cache', array(
            'class' => 'Geonaute\LinkdataBundle\Plugin\CanCacheStrategy',
        ));

        if ($config['can_cache']['enabled']) {
            $options['can_cache'] = $this->get('geonaute_linkdata.cache.can_cache');
        }

        // revalidation
        $this->define('geonaute_linkdata.cache.revalidation', array(
            'class' => 'Guzzle\Plugin\Cache\DefaultRevalidation',
            'arguments' => array($this->get($config['storage']['service']), $this->get($config['can_cache']['service'])),
        ));

        if ($config['revalidation']['enabled']) {
            $options['revalidation'] = $this->get('geonaute_linkdata.cache.revalidation');
        }

        // plugin
        $this->define('geonaute_linkdata.plugin.cache', array(
            'class' => '%guzzle.plugin.cache.class%',
            'arguments' => array($options),
        ));

        // connect the plugin
        $client = $this->container->getDefinition('geonaute_linkdata.client');
        $client->addMethodCall('setDefaultOption', array('params/cache.override_ttl', $config['default_ttl']));
        $client->addMethodCall('addSubscriber', array($this->get('geonaute_linkdata.plugin.cache')));
    }

    protected function loadAuthPlugin(array $config)
    {
        // request-key providers
        $this->define('geonaute_linkdata.auth.request_provider', array(
            'class' => 'Geonaute\LinkdataBundle\Auth\RequestProvider',
            'arguments' => array($this->get('request_injector')),
        ));

        $this->define('geonaute_linkdata.auth.security_context_provider', array(
            'class' => 'Geonaute\LinkdataBundle\Auth\SecurityContextProvider',
            'arguments' => array($this->get('security.token_storage', false)),
        ));

        // plugin
        $this->define('geonaute_linkdata.plugin.auth', array(
            'class' => 'Geonaute\LinkdataBundle\Plugin\AuthPlugin',
            'calls' => array(
                array('addProvider', array($this->get('geonaute_linkdata.auth.request_provider'))),
                array('addProvider', array($this->get('geonaute_linkdata.auth.security_context_provider'))),
            )
        ));

        $client = $this->container->getDefinition('geonaute_linkdata.client');
        $client->addMethodCall('addSubscriber', array($this->get('geonaute_linkdata.plugin.auth')));
    }

    protected function loadLanguagePlugin(array $config)
    {
        $this->define('geonaute_linkdata.plugin.language', array(
            'class' => 'Geonaute\LinkdataBundle\Plugin\LanguagePlugin',
            'arguments' => array($this->get('locale_injector')),
        ));

        $client = $this->container->getDefinition('geonaute_linkdata.client');
        $client->addMethodCall('addSubscriber', array($this->get('geonaute_linkdata.plugin.language')));
    }
}
