<?php

namespace Tenolo\Bundle\IgnoreDoctrineAnnotationsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @package Tenolo\Bundle\IgnoreDoctrineAnnotationsBundle\DependencyInjection
 * @author  Nikita Loges
 * @company tenolo GbR
 */
class Configuration implements ConfigurationInterface
{

    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('tenolo_ignore_annotations');

        $rootNode
            ->children()
                ->arrayNode('annotations')->prototype('scalar')->end()
            ->end();

        return $treeBuilder;
    }
}
