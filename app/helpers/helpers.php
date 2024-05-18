<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

if (!function_exists('is_active_route')) {
    function is_active_route($route)
    {
        $currentURI = request()->getPathInfo();
        return $currentURI == $route ? 'active' : '';
    }
}





