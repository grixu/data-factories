<?php

namespace Grixu\DataFactories\Tests;

use Grixu\DataFactories\FactoryCollection;
use Grixu\DataFactories\Tests\Helpers\TypicalFactory;
use Illuminate\Support\Collection;
use Orchestra\Testbench\TestCase;

class FactoryCollectionTest extends TestCase
{
    /** @test */
    public function it_constructs()
    {
        $factoryCollection = new FactoryCollection(
            TypicalFactory::class,
            10
        );

        $this->assertEquals(FactoryCollection::class, get_class($factoryCollection));
    }

    /** @test */
    public function it_create_making_factories()
    {
        $factoryCollection = new FactoryCollection(
            TypicalFactory::class,
            10
        );

        $collection = $factoryCollection->create(
            ['test' => 'test']
        );

        $this->assertEquals(Collection::class, get_class($collection));
        $this->assertCount(10, $collection);
        $collection->each(fn($item) => $this->assertIsArray($item));
    }
}
