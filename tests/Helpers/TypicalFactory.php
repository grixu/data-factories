<?php

namespace Grixu\DataFactories\Tests\Helpers;

use Grixu\DataFactories\Factory;

class TypicalFactory extends Factory
{
    public function create(array $parameters = []): array
    {
        return $parameters;
    }
}
