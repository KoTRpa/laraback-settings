<?php

declare(strict_types=1);

namespace KMA\LarabackSettings;

use KMA\LarabackSettings\Services\SettingsService;

use function app;

function setting(string $key): SettingsService {
    return app(SettingsService::class, ['key' => $key]);
}
