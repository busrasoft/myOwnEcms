<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'settings_description',
        'settings_key',
        'settings_value',
        'settings_type',
        'settings_must',
        'settings_delete',
        'settings_status',
    ];
}
