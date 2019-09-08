<?php

namespace Phpactor\Extension\ReferenceFinder\Tests\Example;

use Phpactor\Name\FullyQualifiedName;
use Phpactor\ReferenceFinder\ClassImplementationFinder;
use Phpactor\ReferenceFinder\DefinitionLocation;
use Phpactor\ReferenceFinder\DefinitionLocator;
use Phpactor\TextDocument\ByteOffset;
use Phpactor\TextDocument\Locations;
use Phpactor\TextDocument\TextDocument;
use Phpactor\TextDocument\TextDocumentUri;

class SomeImplementationFinder implements ClassImplementationFinder
{
    const EXAMPLE_PATH = '/path/to.php';
    const EXAMPLE_OFFSET = 666;

    public function findImplementations(FullyQualifiedName $name): Locations
    {
        return new Locations([]);
    }
}

