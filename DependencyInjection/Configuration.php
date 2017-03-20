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
                ->scalarNode('community_base_url')->end()
                ->scalarNode('service_description')->defaultValue(__DIR__.'/../Resources/config/client.json')->end()
                ->scalarNode('community_service_description')->defaultValue(__DIR__.'/../Resources/config/community_client.json')->end()
                ->append($this->getFormatterNode())
                ->arrayNode('plugins')
                    ->append($this->getCachePluginNode())
                    ->append($this->getAuthPluginNode())
                    ->append($this->getLanguagePluginNode())
                    ->append($this->getHttpPluginNode())
                ->end()
            ->end()
        ->end();

        return $treeBuilder;
    }

    /**
     * {@inheritDoc}
     */
    public function getFormatterNode()
    {
        $builder = new TreeBuilder();
        $node = $builder->root('formatter');

        $node->canBeEnabled()->end();

        return $node;
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
                        ->scalarNode('adapter')->defaultValue('geonaute_linkdata.cache.array_adapter')->end()
                    ->end()
                ->end()
                ->arrayNode('can_cache')
                    ->canBeDisabled()
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

    /**
     * {@inheritDoc}
     */
    public function getAuthPluginNode()
    {
        $builder = new TreeBuilder();
        $node = $builder->root('auth');

        $node->canBeEnabled()->end();

        return $node;
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguagePluginNode()
    {
        $builder = new TreeBuilder();
        $node = $builder->root('language');

        $node->canBeEnabled()->end();

        return $node;
    }

    /**
     *  {@inheritdoc}
     */
    public function getHttpPluginNode()
    {
        $builder = new TreeBuilder();
        $node = $builder->root('http');

        $node->canBeEnabled()->end();

        return $node;
    }
}
