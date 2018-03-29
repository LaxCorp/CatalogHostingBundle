<?php

namespace LaxCorp\CatalogHostingBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @inheritdoc
 */
class Configuration implements ConfigurationInterface
{

    const ROOT = 'catalog_hosting';

    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root($this::ROOT);

        $rootNode
            ->children()
            ->scalarNode('url')->cannotBeEmpty()->end()
            ->scalarNode('login')->cannotBeEmpty()->end()
            ->scalarNode('password')->cannotBeEmpty()->end()
            ->scalarNode('currency_code')->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
}