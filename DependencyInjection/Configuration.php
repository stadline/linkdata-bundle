<?php

namespace Geonaute\LinkdataBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('geonaute_linkdata');

        $rootNode
            ->children()
                ->scalarNode('base_url')->cannotBeEmpty()->end()
                ->scalarNode('service_description')->defaultValue(__DIR__.'/../Resources/config/client.json')->end()
                ->arrayNode('plugins')
                    ->append($this->getCachePluginNode())
                ->end()
            ->end();

        return $treeBuilder;
    }

    /**
     * {@inheritDoc}
     */
    public function getCachePluginNode()
    {
        $builder = new TreeBuilder();
        $node = $builder->root('cache');

        $node
            ->canBeEnabled()
            ->children()
                ->scalarNode('default_ttl')->defaultValue(3600)->end()
                ->arrayNode('storage')
                    ->canBeDisabled()
                    ->children()
                        ->scalarNode('service')->defaultValue('geonaute_linkdata.cache.storage')->end()
                        ->scalarNode('adapter')->defaultValue('misd_guzzle.cache.doctrine.filesystem.adapter')->end()
                    ->end()
                ->end()
                ->arrayNode('can_cache')
                    ->canBeEnabled()
                    ->children()
                        ->scalarNode('service')->defaultValue('geonaute_linkdata.cache.can_cache')->end()
                    ->end()
                ->end()
                ->arrayNode('revalidation')
                    ->canBeEnabled()
                    ->children()
                        ->scalarNode('service')->defaultValue('geonaute_linkdata.cache.revalidation')->end()
                    ->end()
                ->end()
            ->end()
        ->end();

        return $node;
    }
}
