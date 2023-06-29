<?php

namespace Elshaden\NovaTranslator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Elshaden\NovaTranslator\Commands\NovaTranslatorCommand;

class NovaTranslatorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('nova-translator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_nova-translator_table')
            ->hasCommand(NovaTranslatorCommand::class);
    }
}
