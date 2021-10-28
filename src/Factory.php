<?php

namespace Grixu\DataFactories;

abstract class Factory
{
    abstract public function create(array $parameters = []);

    public static function new(): self
    {
        /** @phpstan-ignore-next-line */
        return new static();
    }

    public static function times(int $times): FactoryCollection
    {
        return new FactoryCollection(static::class, $times);
    }
}
