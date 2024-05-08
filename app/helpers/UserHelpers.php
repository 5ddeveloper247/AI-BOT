<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Membership;
use Illuminate\Support\Facades\Auth;

class UserHelpers
{




    public static function hasUserMembership(): bool // Change return type to bool
    {
        if (Auth::check()) { // Check if user is authenticated
            $userId = Auth::user()->id;

            $membership = Membership::where('user_id', $userId)->exists(); // Check if membership exists

            return $membership; // Return boolean value directly
        }

        return false; // Return false if user is not authenticated
    }
}
