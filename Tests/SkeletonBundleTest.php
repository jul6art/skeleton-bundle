<?php

// @TODO update the namespace
namespace Tests;

use Jul6Art\SkeletonBundle\DependencyInjection\SkeletonExtension;
use Jul6Art\SkeletonBundle\SkeletonBundle;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class SkeletonBundleTest.
 *
 * Smoke test: the bundle wires itself into a container without blowing up.
 *
 * @TODO rename the class with YourBundleNameTest
 */
final class SkeletonBundleTest extends TestCase
{
    public function testTheBundleExposesItsExtension(): void
    {
        $extension = (new SkeletonBundle())->getContainerExtension();

        self::assertInstanceOf(SkeletonExtension::class, $extension);

        // Bundle::getContainerExtension() throws unless the alias is the
        // underscored bundle name, so this guards the whole naming convention.
        // @TODO update the alias with your own bundle name
        self::assertSame('skeleton', $extension->getAlias());
    }

    public function testTheContainerCompilesWithTheBundleRegistered(): void
    {
        $bundle = new SkeletonBundle();
        $extension = $bundle->getContainerExtension();

        $container = new ContainerBuilder();
        $container->registerExtension($extension);
        $bundle->build($container);

        $extension->prepend($container);
        $extension->load([[]], $container);
        $container->compile();

        // Set by prepend() from the Configuration tree.
        // @TODO update the parameter prefix with your own bundle alias
        self::assertTrue($container->getParameter('skeleton.enabled'));
    }
}
