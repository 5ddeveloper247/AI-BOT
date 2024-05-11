<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Membership;
use Illuminate\Support\Facades\Auth;

class MembershipHelpers
{




    public static function setChatInputNetCount($membershipId, $input)
    {
        // Retrieve the membership record
        $membership = Membership::find($membershipId);

        // Update the in_net_count column
        $wordCount = str_word_count($input);
        if ($membership) {
            $membership->chat_input_net_count += (int)$wordCount;
            $membership->save();
            return $membership->chat_input_net_count;
        }
        // Return null if membership is not found
        return null;
    }

    public static function setChatOutputNetCount($membershipId, $input)
    {
        // Retrieve the membership record
        $membership = Membership::find($membershipId);

        // Update the in_net_count column
        $wordCount = str_word_count($input);
        if ($membership) {
            $membership->chat_output_net_count += (int)$wordCount;
            $membership->save();
            return $membership->chat_output_net_count;
        }

        // Return null if membership is not found
        return null;
    }
}
