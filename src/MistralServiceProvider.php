<?php

namespace Board3r\MistralLaravelPlugin;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MistralServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package):void
    {
        $package->name('mistral-laravel-plugin')
            ->hasConfigFile('mistral')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command->publishConfigFile();
            });
    }
}
