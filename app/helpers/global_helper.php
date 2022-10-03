<?php

use App\Models\configs;

if (!function_exists('settings')) {
    function settings()
    {
        return configs::get();
    }
}
