<?php

declare(strict_types=1);

namespace Shopping\ApiTKUpdateBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class ShoppingApiTKUpdateBundleExtension.
 *
 * @package Shopping\ApiTKUpdateBundle\DependencyInjection
 *
 * @author Alexander Dormann <alexander.dormann@check24.de>
 */
class ShoppingApiTKUpdateBundleExtension extends Extension
{
    /**
     * Loads a specific configuration.
     *
     * @param array            $configs
     * @param ContainerBuilder $container
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');
    }
}
