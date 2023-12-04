<?php

namespace Bigtechlab\Ddd;

use Bigtechlab\Ddd\Commands\DddCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DddServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ddd')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ddd_table')
            ->hasCommand(DddCommand::class);
    }
}
