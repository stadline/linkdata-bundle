<?php

namespace Geonaute\LinkdataBundle\DependencyInjection;

use Geonaute\LinkdataBundle\DependencyInjection\Helpers\SimpleExtension;

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
        $this->register('geonaute_linkdata.service_description', array(
            'class' => '%guzzle.service_description.class%',
            'factory' => array('%guzzle.service_description.class%', 'factory'),
            'arguments' => array($config['service_description']),
        ));

        $this->register('geonaute_linkdata.client', array(
            'class' => 'Geonaute\LinkdataBundle\Plugin\CachedClient',
            'tags' => array(
                'guzzle.client' => array(),
            ),
            'calls' => array(
                array('setBaseUrl', array($config['base_url'])),
                array('setDescription', array($this->get('geonaute_linkdata.service_description'))),
            )
        ));

        $this->container->setAlias('linkdata_rest_client', 'geonaute_linkdata.client');
    }
}
