<?php

namespace CanalTP\FenrirApiClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('canal_tp_fenrir_api_client');

        $rootNode
            ->children()
            ->scalarNode('uri')->isRequired()->end()
        ;

        return $treeBuilder;
    }
}
