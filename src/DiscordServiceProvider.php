<?php

namespace Wulfheart\Discord;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wulfheart\Discord\Commands\DiscordCommand;

class DiscordServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('enhanced-discord-for-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_enhanced-discord-for-laravel_table')
            ->hasCommand(DiscordCommand::class);
    }
}
