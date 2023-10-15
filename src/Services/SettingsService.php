<?php

declare(strict_types=1);

namespace KMA\LarabackSettings\Services;

use Illuminate\Support\Arr;
use KMA\LarabackSettings\Models\Settings;

final readonly class SettingsService
{
    public function get(string $key, ?string $default = null): ?string
    {
        return Settings::firstWhere('key', '=', $key)?->value ?? $default;
    }

    public function set(string|array $key, ?string $value = null): void
    {
        $keys = is_array($key) ? $key : [$key => $value];

        foreach ($keys as $key => $value) {
            Settings::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }

    public function delete(string $key): void
    {
        Settings::firstWhere('key', '=', $key)?->delete();
    }
}
