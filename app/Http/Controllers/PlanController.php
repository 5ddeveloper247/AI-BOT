<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membership;
use Carbon\Carbon;
use App\Models\Plan;
use App\Models\Feature;
use Illuminate\Validation\ValidationException;




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
            'redirectUrl' => url('/chat_dashboard') // Assuming there's a route named 'chat_dashboard'
        ]);
    }




    // admin side

    public function updatePlanFromAdmin(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'plan_name' => 'required|max:255',
            'plan_name_description' => 'nullable|max:255',
            'plan_tittle' => 'nullable|max:255',
            'plan_tittle_description' => 'nullable|max:500',
            'plan_price' => 'required|numeric',
            'input_word_limit' => 'nullable|numeric',
            'output_word_limit' => 'nullable|numeric',
        ]);

        // Update the plan details
        $plan = Plan::find($id);
        $plan->plan_name = $request->input('plan_name');
        $plan->plan_name_description = $request->input('plan_name_description');
        $plan->plan_tittle = $request->input('plan_tittle');
        $plan->plan_tittle_description = $request->input('plan_tittle_description');
        $plan->plan_price = $request->input('plan_price');
        $plan->input_word_limit = $request->input('input_word_limit');
        $plan->output_word_limit  = $request->input('output_word_limit');
        $plan->save();

        // Redirect back with success message
        return response()->json(['message' => 'Plan updated successfully'], 200);
    }

    public function deleteplanfromadmin($id)
    {

        // dd($id);
        // Find the plan by ID
        $plan = Plan::findOrFail($id);

        // Delete the plan
        $plan->delete();

        // Optionally, you can return a response indicating success
        return response()->json(['message' => 'Plan deleted successfully'], 200);
    }


    // public function createplanfromadmin(Request $request)
    // {
    //     // Validate the request data
    //     $validatedData = $request->validate([
    //         'plan_name' => 'required|max:255',
    //         'plan_price' => 'required|numeric',
    //         'plan_name_description' => 'nullable|max:500',
    //         'plan_tittle' => 'required|max:255',
    //         'plan_tittle_description' => 'nullable|max:500',
    //         'input_word_limit' => 'nullable|numeric',
    //         'output_word_limit' => 'nullable|numeric',
    //     ]);

    //     // Create a new plan instance
    //     $plan = new Plan;
    //     $plan->plan_name = $request->plan_name;
    //     $plan->plan_name_description = $request->plan_name_description;
    //     $plan->plan_tittle = $request->plan_tittle;
    //     $plan->plan_tittle_description = $request->plan_tittle_description;
    //     $plan->plan_price = $request->plan_price;
    //     $plan->input_word_limit = $request->input_word_limit;
    //     $plan->output_word_limit = $request->output_word_limit;
    //     $plan->save();

    //     // Optionally, you can return a response indicating success
    //     return response()->json(['success' => true, 'message' => 'Plan created successfully'], 201);
    // }





    public function createplanfromadmin(Request $request)
    {
        // return json_encode($request->all());
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'plan_name' => 'required|max:255|unique:plans',
                'plan_price' => 'required|numeric',
                'plan_name_description' => 'nullable|max:500',
                'plan_tittle' => 'required|max:255',
                'plan_tittle_description' => 'nullable|max:500',
                'input_word_limit' => 'nullable|numeric',
                'output_word_limit' => 'nullable|numeric',
            ]);

            //Create a new plan instance
            $plan = new Plan;
            $plan->plan_name = $request->plan_name;
            $plan->plan_name_description = $request->plan_name_description;
            $plan->plan_tittle = $request->plan_tittle;
            $plan->plan_tittle_description = $request->plan_tittle_description;
            $plan->plan_price = $request->plan_price;
            $plan->input_word_limit = $request->input_word_limit;
            $plan->output_word_limit = $request->output_word_limit;
            $plan->save();

            // Return success response
            return response()->json(['success' => true, 'message' => 'Plan created successfully'], 201);
        } catch (ValidationException $e) {
            // Return validation failure response
            return response()->json(['success' => false, 'errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Return other error response
            return response()->json(['success' => false, 'message' => 'Failed to create plan'], 500);
        }
    }












    public function storeplanfeature(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'plan_id' => 'required|exists:plans,id',
            'features' => 'required|string|max:255', // Assuming 'features' is an array of feature names
        ]);

        $plan = Plan::findOrFail($validatedData['plan_id']);

        // Delete existing features associated with the plan
        $plan->features()->delete();

        // Loop through each feature and store it in the database
        foreach ($validatedData['features'] as $featureName) {
            $feature = new Feature();
            $feature->name = $featureName;
            $feature->plan_id = $plan->id; // Associate the feature with the plan
            $feature->save(); // Save the feature
        }

        // Optionally, you can return a JSON response with a success message
        return response()->json(['success' => true, 'message' => 'Features added successfully']);
    }


    public function getFeatures(Plan $plan)
    {
        try {
            // Fetch all features associated with the plan
            $features = $plan->features()->get();

            // Return the features as JSON response
            return response()->json([
                'success' => true,
                'features' => $features
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            return response()->json(['error' => 'Error fetching features'], 500);
        }
    }

    public function deleteFeatures(Plan $plan)
    {
        try {
            // Delete all features associated with the plan
            $plan->features()->delete();

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Features deleted successfully'
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            return response()->json(['error' => 'Error deleting features'], 500);
        }
    }

    public function storeFeatures(Request $request, Plan $plan)
    {
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'plan_id' => 'required|exists:plans,id',
                'features.*' => 'required|string|max:255', // Assuming 'features' is an array of feature names
            ]);

            // Delete existing features associated with the plan
            $plan->features()->delete();

            // Loop through each feature and store it in the database
            foreach ($validatedData['features'] as $featureName) {
                $feature = new Feature();
                $feature->name = $featureName;
                $feature->plan_id = $plan->id; // Associate the feature with the plan
                $feature->save(); // Save the feature
            }

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Features added successfully'
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            return response()->json(['error' => 'Error storing features'], 500);
        }
    }

    public function getPlanFeatures(Plan $plan)
    {
        try {
            $features = $plan->features()->get();
            return response()->json(['features' => $features]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error fetching features'], 500);
        }
    }

    public function showPlanDetails(Plan $plan)
    {
        // Retrieve features associated with the plan
        $features = Feature::where('plan_id', $plan->id)->pluck('name');


        // Create an associative array containing plan details and features
        $data = [
            'plan' => [
                'plan_name' => $plan->plan_name,
                'plan_name_description' => $plan->plan_name_description,
                'plan_tittle' => $plan->plan_tittle,
                'plan_tittle_description' => $plan->plan_tittle_description,
                'plan_price' => $plan->plan_price,
                'input_word_limit' => $plan->input_word_limit,
                'output_word_limit' => $plan->output_word_limit,
                // Add other plan attributes as needed
            ],
            'features' => $features,
        ];

        // dd(  $features, $plan->id, $data );
        // Return the combined data as JSON response
        return response()->json($data);
    }
}
