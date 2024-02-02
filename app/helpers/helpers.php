<?php

if (!function_exists('is_active_route')) {
    function is_active_route($route)
    {
        $currentURI = request()->getPathInfo();
        return $currentURI == $route ? 'active' : '';
    }
}