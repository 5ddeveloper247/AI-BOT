<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membership;
use Carbon\Carbon;



class PlanController extends Controller
{


    public function storemembership(Request $request)
    {
       // Validate the request data
    $request->validate([
        'plan' => 'required|numeric',
    ]);

    // Get the selected plan value from the request
    $planId = $request->input('plan');

    // Get the authenticated user ID
    $userId = auth()->id();

    // Check if the user already has a membership
    $membership = Membership::where('user_id', $userId)->first();

    if ($membership) {
        // If the user already has a membership, update it
        $membership->update([
            'plan_id' => $planId,
            'payment_status' => 'pending', // Set the default payment status
            // You can set other membership details as needed
        ]);
    } else {
        // If the user doesn't have a membership, create a new one
        $membership = new Membership([
            'user_id' => $userId,
            'plan_id' => $planId,
            'payment_status' => 'pending', // Set the default payment status
            // You can set other membership details as needed
        ]);
        $membership->save();
    }

    // Return a response
    return response()->json([
        'message' => 'Membership stored successfully',
        'redirectUrl' => route('payment') // Assuming there's a route named 'payment'
    ]);
    }



    public function startTrial(Request $request)
    {
        // Validate the request data
        $request->validate([
            'plan' => 'required|numeric',
        ]);

        // Get the selected plan value from the request
        $plan = $request->input('plan');

        // Get the authenticated user ID
        $userId = auth()->id();

        // Get the current date
        $currentDate = Carbon::now();

        // Calculate the end date of the trial period (7 days after the current date)
        $endDate = $currentDate->copy()->addDays(7);

        // Check if the user already has a membership
        $membership = Membership::where('user_id', $userId)->first();

        if ($membership) {
            // If the user already has a membership, update it
            $membership->update([
                'plan_id' => $plan,
                'payment_status' => 'unpaid', // Set the default payment status
                'trail' => '7 days', // Set the trail duration
                'days' => '7', // Set the days value to 7
                'start_trial' => $currentDate, // Set the start trial date to the current date
                'end_trial' => $endDate, // Set the end trial date to 7 days after the current date
            ]);
        } else {
            // If the user doesn't have a membership, create a new one
            $membership = new Membership([
                'user_id' => $userId,
                'plan_id' => $plan,
                'payment_status' => 'unpaid', // Set the default payment status
                'trail' => '7 days', // Set the trail duration
                'days' => '7', // Set the days value to 7
                'start_trial' => $currentDate, // Set the start trial date to the current date
                'end_trial' => $endDate, // Set the end trial date to 7 days after the current date
            ]);
            $membership->save();
        }

        // Return a response
        return response()->json([
            'message' => 'Membership stored successfully',
            'redirectUrl' => route('chat_dashboard') // Assuming there's a route named 'chat_dashboard'
        ]);
    }
}
