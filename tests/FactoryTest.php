<?php

namespace Grixu\DataFactories\Tests;

use Grixu\DataFactories\FactoryCollection;
use Grixu\DataFactories\Tests\Helpers\TypicalFactory;
use Orchestra\Testbench\TestCase;

class FactoryTest extends TestCase
{
    /** @test */
    public function it_new_creating_instance()
    {
        $factory = TypicalFactory::new();

        $this->assertEquals(TypicalFactory::class, get_class($factory));
    }

    /** @test */
    public function times_creating_collection()
    {
        $factoryCollection = TypicalFactory::times(10);

        $this->assertEquals(FactoryCollection::class, get_class($factoryCollection));
    }
}
