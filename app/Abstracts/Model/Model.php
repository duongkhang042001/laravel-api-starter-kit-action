<?php

namespace App\Abstracts\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Builder;

abstract class Model extends Eloquent
{
    protected static function booted()
    {
        static::creating(function ($model) {
        });

        static::updating(function ($model) {
        });
    }
}
