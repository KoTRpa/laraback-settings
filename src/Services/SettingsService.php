<?php

declare(strict_types=1);

namespace KMA\LarabackSettings\Services;

use KMA\LarabackSettings\Models\Settings;

final readonly class SettingsService
{
    public function __construct(
        private string $key
    )
    {
    }

    public function get(?string $default = null): ?string
    {
        return Settings::firstWhere('key', '=', $this->key)?->value ?? $default;
    }

    public function set(string $value): void
    {
        Settings::updateOrCreate(
            ['key' => $this->key],
            ['value' => $value]
        );
    }

    public function delete(): void
    {
        Settings::firstWhere('key', '=', $this->key)?->delete();
    }
}
