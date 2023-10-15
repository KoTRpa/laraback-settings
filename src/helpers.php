<?php

declare(strict_types=1);

namespace KMA\LarabackSettings;

use KMA\LarabackSettings\Services\SettingsService;

use function app;

function setting(string|array|null $key = null, ?string $default = null): SettingsService|string|null
{
    if (is_null($key)) {
        return app(SettingsService::class);
    }

    if (is_array($key)) {
        return app(SettingsService::class)->set($key);
    }

    return app(SettingsService::class)->get($key, $default);
}
