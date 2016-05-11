<?php

namespace CanalTP\FenrirApiClientBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use CanalTP\FenrirApiClient\FenrirApi;

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

        $fenrirApiDefinition = new Definition();

        $fenrirApiDefinition
            ->setClass(FenrirApi::class)
            ->setFactory([FenrirApi::class, 'createWithBaseUrl'])
            ->setArguments([$baseUrl])
        ;

        $container->setDefinition('canal_tp_fenrir.api', $fenrirApiDefinition);
    }
}
