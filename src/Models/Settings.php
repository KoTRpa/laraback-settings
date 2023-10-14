<?php

declare(strict_types=1);

namespace KMA\LarabackSettings\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    public $timestamps = false;

    protected $table = 'app_settings';

    protected $fillable = [
        'key',
        'value',
    ];
}
