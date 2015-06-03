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
abstract class SimpleExtension extends Extension
{
    /**
     * @type ContainerBuilder
     */
    protected $container;

    /**
     * {@inheritDoc}
     */
    final public function load(array $configs, ContainerBuilder $container)
    {
        $this->container = $container;

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $this->loadConfig($config);
    }

    /**
     * Easier way to load container configuration
     */
    abstract protected function loadConfig(array $config);

    /**
     * Easier way to retrieve a service
     *
     * @param string $id
     * @return Definition
     */
    protected function get($id)
    {
        return $this->container->getDefinition($id);
    }

    /**
     * Easier way to register a service
     *
     * @param string $id
     * @param array  $options
     * @return Definition
     */
    protected function register($id, array $options)
    {
        $definition = new Definition();

        if (isset($options['class'])) {
            $this->container->setParameter($id.'.class', $options['class']);
            $definition->setClass('%'.$id.'.class%');
        }

        if (isset($options['factory_class'])) {
            $definition->setFactoryClass($options['factory_class']);
        }

        if (isset($options['factory_method'])) {
            $definition->setFactoryMethod($options['factory_method']);
        }

        if (isset($options['scope'])) {
            $definition->setScope($options['scope']);
        }

        if (isset($options['arguments'])) {
            $definition->setArguments($options['arguments']);
        }

        if (isset($options['calls'])) {
            $definition->setMethodCalls($options['calls']);
        }

        if (isset($options['tags'])) {
            $definition->setTags($options['tags']);
        }

        if (isset($options['public'])) {
            $definition->setPublic($options['public']);
        }

        if (isset($options['synthetic'])) {
            $definition->setSynthetic($options['synthetic']);
        }

        if (isset($options['abstract'])) {
            $definition->setAbstract($options['abstract']);
        }

        if (isset($options['lazy'])) {
            $definition->setLazy($options['lazy']);
        }

        return $this->container->setDefinition($id, $definition);
    }
}
