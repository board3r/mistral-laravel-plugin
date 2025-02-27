<?php

namespace Tests;

use Board3r\MistralLaravelPlugin\MistralServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            MistralServiceProvider::class,
        ];
    }
}
