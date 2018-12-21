<?php

namespace Phpactor\Extension\ReferenceFinder\Tests\Example;

use Phpactor\Container\Container;
use Phpactor\Container\ContainerBuilder;
use Phpactor\Container\Extension;
use Phpactor\Extension\ReferenceFinder\ReferenceFinderExtension;
use Phpactor\MapResolver\Resolver;

class SomeExtension implements Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(ContainerBuilder $container)
    {
        $container->register('some_definition_locator', function (Container $container) {
            return new SomeDefinitionLocator();
        }, [ ReferenceFinderExtension::TAG_DEFINITION_LOCATOR => []]);
    }

    /**
     * {@inheritDoc}
     */
    public function configure(Resolver $schema)
    {
    }
}
