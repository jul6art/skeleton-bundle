<?php

// @TODO update the namespace
namespace Jul6Art\SkeletonBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class SkeletonExtension.
 *
 * @TODO rename the class with YourBundleExtension
 */
class SkeletonExtension extends Extension implements PrependExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );

        $loader->load('services.yaml');
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Exception
     */
    public function prepend(ContainerBuilder $container): void
    {
        $configs = $container->resolveEnvPlaceholders($container->getExtensionConfig($this->getAlias()), true);

        $config = $this->processConfiguration(new Configuration(), $configs);

        foreach ($config as $key => $parameter) {
            $container->setParameter(sprintf('%s.%s', $this->getAlias(), $key), $parameter);
        }
    }
}
