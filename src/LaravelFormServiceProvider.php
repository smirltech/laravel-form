<?php

namespace SmirlTech\LaravelForm;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelFormServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-form')
            //->hasConfigFile()
            ->hasViews();
        //->hasMigration('create_laravel-form_table')
        //->hasCommand(LaravelFormCommand::class);
    }
}
