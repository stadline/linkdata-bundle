<?php

namespace Geonaute\LinkdataBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class GeonauteLinkdataExtension extends SimpleExtension
{
    /**
     * {@inheritDoc}
     */
    protected function loadConfig(array $config)
    {
        $this->loadRestClient($config);
    }

    protected function loadRestClient(array $config)
    {
        $this->register('geonaute_linkdata.service_description', array(
            'class' => '%guzzle.service_description.class%',
            'factory_class' => '%guzzle.service_description.class%',
            'factory_method' => 'factory',
            'arguments' => array( $config['service_description'] ),
        ));

        $this->register('geonaute_linkdata.client', array(
            'class' => 'Geonaute\LinkdataBundle\Plugin\CachedClient',
            'tags' => array(
                'guzzle.client' => array(),
            ),
            'calls' => array(
                array( 'setBaseUrl',       array( $config['base_url'] )),
                array( 'setDefaultOption', array( 'params/cache.override_ttl', 3600 )),
                array( 'setDescription',   array( $this->get('geonaute_linkdata.service_description') )),
            )
        ));

        $this->container->setAlias('linkdata_rest_client', 'geonaute_linkdata.client');
    }
}
