<?php

namespace Sohel1999\Laravelsslcommerz;

use Sohel1999\Laravelsslcommerz\Commands\LaravelsslcommerzCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelsslcommerzServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravelsslcommerz')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravelsslcommerz_table')
            ->hasCommand(LaravelsslcommerzCommand::class);
    }
}
