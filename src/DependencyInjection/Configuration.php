<?php

namespace QPautrat\ReactjsPhpBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Quentin Pautrat <quentin.pautrat@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('reactjs_php');

        $rootNode
            ->children()
                ->scalarNode('library_path')
                    ->isRequired()
                    ->cannotBeEmpty()
                    ->validate()
                    ->ifTrue(function($v) { return false === file_exists($v); })
                        ->thenInvalid('File at %s does not exist')
                    ->end()
                ->end()
                ->scalarNode('app_path')
                    ->isRequired()
                    ->cannotBeEmpty()
                    ->validate()
                    ->ifTrue(function($v) { return false === file_exists($v); })
                        ->thenInvalid('File at %s does not exist')
                    ->end()
                ->end()
        ->end();

        return $treeBuilder;
    }
}