<?php

use App\Common;

if (!function_exists('helpers')) {
    function helpers()
    {
        return app()->make(Common::class);
    }
}
