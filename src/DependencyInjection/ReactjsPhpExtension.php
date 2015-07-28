<?php

namespace QPautrat\ReactjsPhpBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;

/**
 * @author Quentin Pautrat <quentin.pautrat@gmail.com>
 */
class ReactjsPhpExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container
            ->getDefinition('reactjs_php.reactjs')
            ->setArguments(array(
                $config['library_path'],
                $config['app_path']
            ))
        ;
    }
}