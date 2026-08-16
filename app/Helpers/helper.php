<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('loginUser')) {
    function loginUser()
    {
        return Auth::user();
    }
}

if (!function_exists('loginUserId')) {
    function loginUserId()
    {
        return Auth::id();
    }
}
