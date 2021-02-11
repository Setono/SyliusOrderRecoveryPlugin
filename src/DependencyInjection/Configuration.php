<?php

declare(strict_types=1);

namespace Setono\SyliusOrderRecoveryPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('setono_sylius_order_recovery');
        $rootNode = $treeBuilder->getRootNode();

        /**
         * @psalm-suppress MixedMethodCall
         * @psalm-suppress PossiblyUndefinedMethod
         */
        $rootNode
            ->children()
                ->scalarNode('option')
                    ->info('This is an example configuration option')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
        ;

        return $treeBuilder;
    }
}
