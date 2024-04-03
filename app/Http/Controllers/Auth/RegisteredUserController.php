<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


}
