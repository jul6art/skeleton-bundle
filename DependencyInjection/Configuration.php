<?php

// @TODO update the namespace
namespace Jul6Art\SkeletonBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        // @TODO update the bundle configuration root name
        $builder = new TreeBuilder('skeleton');

        $node = $builder->getRootNode();

        $node
            ->children()
                ->scalarNode('enabled')->defaultTrue()->end()
            ->end();

        return $builder;
    }
}
