<?php

declare(strict_types=1);

namespace KMA\LarabackSettings;

use Illuminate\Support\ServiceProvider;

class LarabackSettingsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register(): void
    {
    }
}
