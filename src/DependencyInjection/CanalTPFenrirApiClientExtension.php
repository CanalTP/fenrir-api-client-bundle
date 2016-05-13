<?php

namespace CanalTP\FenrirApiClientBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class CanalTPFenrirApiClientExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $baseUrl = $config['uri'];
        $fenrirApiClass = 'CanalTP\\FenrirApiClient\\FenrirApi';

        $fenrirApiDefinition = new Definition();

        $fenrirApiDefinition
            ->setClass($fenrirApiClass)
            ->setFactory([$fenrirApiClass, 'createWithBaseUrl'])
            ->setArguments([$baseUrl])
        ;

        $container->setDefinition('canal_tp_fenrir.api', $fenrirApiDefinition);
    }
}
