<?php

namespace App\Http\Controllers;



use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

use Illuminate\Validation\Rule;
use App\Models\Chat;
use App\Models\Membership;
use App\Models\Plan;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function showProfile()
    {


        // Get the authenticated userjdfksdjfksjdkfskfdlfs
        $user = Auth::user();

        // Fetch the user's membership
        $membership = Membership::where('user_id', $user->id)->where('status', true)->first();
        $plans_Bot1 = Plan::with('features')->where('plan_type', 'Bot 1')->latest()->first();
        $plans_Bot2 = Plan::with('features')->where('plan_type', 'Bot 2')->latest()->first();
        $plans_Bot1_Plus_Bot2 = Plan::with('features')->where('plan_type', 'Bot 1 + Bot 2')->latest()->first();
       

        // Initialize the plan variable
        $plan = null;
        // Check if the user has a membership
        if ($membership) {
            // Fetch the plan associated with the membership
            $plan = Plan::find($membership->plan_id);
        }

        // Fetch the user's chats
        $chats = Chat::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        // Pass both user, chats, and plan variables to the view
        return view('web.chat_dashboard', compact('user', 'chats', 'plan', 'membership', 'plans_Bot1', 'plans_Bot2', 'plans_Bot1_Plus_Bot2'));
    }


    public function edit(Request $request): JsonResponse
    {
        // Fetch user data or any other necessary data
        $userData = $request->user();

        // Return a JSON response

        return response()->json([
            'user' => $userData,
            'message' => 'Profile edit data retrieved successfully.',
        ]);
    }

    // public function edit(Request $request): View
    // {
    //     // dd(  $request->user());

    //     return view('profile.edit', [
    //         'user' => $request->user(),
    //     ]);
    // }

    /**
     * Update the user's profile information.
     */

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => [
                'required',
                'email', // Use built-in email validation rule
                Rule::unique('users')->ignore($request->user()->id), // Ensure email is unique (excluding current user)
                function ($attribute, $value, $fail) {
                    // Custom email validation (optional)
                    if (!$this->isValidEmailFormat($value)) {
                        $fail('The email must be in a valid format.');
                    }
                },
            ],
            // Other validation rules for your profile update form...
        ]);

        if ($validator->fails()) {

            toastr()->addError("Failed to update profile");
            return redirect()->back()
                ->withErrors($validator)
                ->withInput(); // Preserve user input for form re-submission
        }

        $user = $request->user();
        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null; // Invalidate email verification if email changes
        }

        $user->save();
        return redirect()->back()->with('status', 'profile-updated');
    }

    // Custom email format validation function
    private function isValidEmailFormat(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }










    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }





    public function uploadProfileImage(Request $request)
    {
        // Validate the request data
        $request->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate file type and size
        ]);

        // Check if a file is present in the request
        if ($request->hasFile('profile_image')) {
            // Generate a unique file name
            $fileName = time() . '_' . $request->file('profile_image')->getClientOriginalName();

            try {
                // Store the file in the specified directory
                $filePath = $request->file('profile_image')->storeAs('public/profiles', $fileName);

                // Update the authenticated user's profile picture path
                Auth::user()->update(['picture' => $filePath]);

                // Log a success message
                \Log::info('Profile picture updated successfully.');

                // If you want to return the updated image URL for displaying it on the frontend
                // you can use Storage facade to generate a URL to the stored file
                $imageUrl = Storage::url($filePath);

                // Return the image URL
                return response()->json(['image_url' => $imageUrl]);
            } catch (\Exception $e) {
                // Log the error
                \Log::error('Failed to upload profile picture: ' . $e->getMessage());

                // Return an error response
                return response()->json(['error' => 'Failed to upload profile picture.'], 500);
            }
        }

        // If no file is present in the request, return an error response
        return response()->json(['error' => 'No profile picture found in the request.'], 400);
    }
}
