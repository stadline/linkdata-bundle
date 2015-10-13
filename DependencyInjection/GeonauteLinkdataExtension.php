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
        // serializer listener
        $this->define('geonaute_linkdata_bundle.serializer_listener', array(
            'class' => 'Geonaute\LinkdataBundle\Listener\SerializerEventSubscriber',
            'tags' => array(
                array('name' => 'jms_serializer.event_subscriber'),
            ),
            'calls' => array(
                array('setClient', array($this->get('linkdata_rest_client'))),
            )
        ));

        // rest client
        $this->define('geonaute_linkdata.service_description', array(
            'class' => '%guzzle.service_description.class%',
            'factory' => array('%guzzle.service_description.class%', 'factory'),
            'arguments' => array($config['service_description']),
        ));

        $this->define('geonaute_linkdata.client', array(
            'class' => 'Geonaute\LinkdataBundle\Plugin\CachedClient',
            'tags' => array(
                array('name' => 'guzzle.client'),
            ),
            'calls' => array(
                array('setBaseUrl', array($config['base_url'])),
                array('setDescription', array($this->get('geonaute_linkdata.service_description'))),
            )
        ));

        $this->alias('linkdata_rest_client', 'geonaute_linkdata.client');

        // form types
        $this->define('geonaute_linkdata.type.linkdata_choice', array(
            'class' => 'Geonaute\LinkdataBundle\Form\Type\LinkdataChoiceType',
            'tags' => array(
                array('name' => 'form.type', 'alias' => 'linkdata_choice'),
            ),
            'calls' => array(
                array('setClient', array($this->get('linkdata_rest_client'))),
            )
        ));

        $this->define('geonaute_linkdata.type.filter_linkdata_choice', array(
            'class' => 'Geonaute\LinkdataBundle\Form\Type\FilterLinkdataChoiceType',
            'tags' => array(
                array('name' => 'form.type', 'alias' => 'filter_linkdata_choice'),
            ),
            'calls' => array(
                array('setClient', array($this->get('linkdata_rest_client'))),
            )
        ));
    }
}
