<?php

if (!function_exists('settings')) {
    function settings()
    {
        return configs::get();
    }
}
