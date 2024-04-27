<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */


    // public function store(Request $request): RedirectResponse
    // {
    //    $valy =  $request->validate([
    //     'name' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
    //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //     'phone' => ['required', 'string', 'regex:/^[0-9]+$/'],
    //     'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/'],
    //  ]);
    //     // dd( 'ii', $valy);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'password' => Hash::make($request->password),
    //     ]);
    //     // dd( 'ii', $user);
    //     event(new Registered($user));

    //     Auth::login($user);

    //     // return redirect(RouteServiceProvider::HOME);
    //     return redirect(route('plans'));

    // }

//



public function store(Request $request): RedirectResponse
{
    $validatedData = $request->validate([
        'name' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'phone' => ['required', 'string', 'regex:/^[0-9]+$/'],
        'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/'],
    ], [
        'name.required' => 'The name field is required.',
        'name.string' => 'The name must be a string.',
        'name.regex' => 'The name  only contain letters and spaces.',
        'email.required' => 'The email field is required.',
        'email.string' => 'The email must be a string.',
        'email.email' => 'The email must be a valid email address.',
        'email.max' => 'The email must not be greater than :max characters.',
        'email.unique' => 'The email has already been taken.',
        'phone.required' => 'The phone field is required.',
        'phone.string' => 'The phone must be a string.',
        'phone.regex' => 'The phone only contain digits.',
        'password.required' => 'The password field is required.',
        'password.string' => 'The password must be a string.',
        'password.min' => 'The password must be at least :min characters.',
        'password.confirmed' => 'The password confirmation does not match.',
        'password.regex' => 'The password must contain at least one letter, one number, and one special character.',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => Hash::make($request->password),
    ]);

    event(new Registered($user));

    Auth::login($user);

    // Redirect the user if registration is successful
    return redirect()->route('plans');
}












 // google authentication



 public function redirectToGoogle(Request $request)
    {
        // $ip = $request->ip();
        // dd($ip);
        return redirect()->away('https://accounts.google.com/o/oauth2/auth?' . http_build_query([
            'client_id' => env('GOOGLE_CLIENT_ID'),
            'redirect_uri' => env('GOOGLE_REDIRECT_URL'),
            'response_type' => 'code',
            'scope' => 'openid profile email https://www.googleapis.com/auth/user.birthday.read ',
            'access_type' => 'offline', // Use offline access to get refresh token
            'prompt' => 'consent',
        ]));
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            $code = $request->input('code');

            // Send a POST request to Google's token endpoint to exchange the code for tokens
            $response = Http::post('https://oauth2.googleapis.com/token', [
                'code' => $code,
                'client_id' => env('GOOGLE_CLIENT_ID'),
                'client_secret' => env('GOOGLE_CLIENT_SECRET'),
                'redirect_uri' => env('GOOGLE_REDIRECT_URL'),
                'grant_type' => 'authorization_code',
            ]);
            $data = $response->json();

            $accessToken = $data['access_token'];

            // Make a request to Google's userinfo API to get the user's profile including email
            $profileResponse = Http::get('https://www.googleapis.com/oauth2/v2/userinfo', [
                'access_token' => $accessToken,
            ]);
            $profileData = $profileResponse->json();

            // Check if required data is present in the response
            if(isset($profileData['name'], $profileData['email'], $profileData['id'])){
                // Check if the user already exists in the database
                $user = User::where('email', $profileData['email'])->first();
                if ($user) {
                   // dd(Hash::check($profileData['id'], $user->password));
                    // If the user exists, check if the password matches
                    if (Hash::check($profileData['id'], $user->password)) {
                        // If the password matches, log the user in
                        Auth::login($user);
                    } else {
                        // If the password does not match, return an error message
                        return redirect()->route('register')->with(['googleSocialAutherror'=>"Invalid credentials"]);
                    }
                } else {
                    // If the user does not exist, create a new account
                    $user = User::create([
                        'name' => $profileData['name'],
                        'email' => $profileData['email'],
                        'password' => Hash::make($profileData['id']), // Use Google ID as password
                        'language' => $profileData['locale'] ?? null, // Store language if available
                    ]);

                    event(new Registered($user));

                    Auth::login($user);
                }
                // Redirect the user after login
                return redirect()->route('plans');
            } else {
                // If required data is not present, redirect to register route with error message
                return redirect()->route('register')->with(['googleSocialAutherror'=>"Incomplete user data"]);
            }
        } catch (\Exception $e) {
            // Redirect to the register route if an error occurs
            return redirect()->route('register')->with(['googleSocialAutherror'=>"Something went wrong"]);
        }
    }



}
