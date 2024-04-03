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
        // Get the authenticated user
        $user = Auth::user();

        // Fetch the user's membership
        $membership = Membership::where('user_id', $user->id)->first();

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
        return view('web.chat_dashboard', compact('user', 'chats', 'plan', 'membership'));
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

        $request->user()->fill($request->validated());
        // dd( $request->user());
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('chat_dashboard')->with('status', 'profile-updated');
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
        // dd(  $request->user());
        // Check if a file is present in the request
        if ($request->hasFile('profile_image')) {
            // Generate a unique file name
            $fileName = time() . '_' . $request->file('profile_image')->getClientOriginalName();

            // Store the file in the specified directory
            $filePath = $request->file('profile_image')->storeAs('public/profiles', $fileName);

            // Update the authenticated user's profile picture path
            Auth::user()->update(['picture' => $filePath]);

            // Log a success message
            \Log::info('Profile picture updated successfully.');

            // If you want to return the updated image URL for displaying it on the frontend
            // you can use Storage facade to generate a URL to the stored file
            $imageUrl = Storage::url($filePath);

            return response()->json(['image_url' => $imageUrl]);
        }

        // Redirect back with success message
        return back()->with('success', 'Profile picture uploaded successfully.');
    }
}
