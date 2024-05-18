<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Membership;
use App\Models\Plan;
use App\Models\Payment;



class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(RouteServiceProvider::HOME);
    // }
    public function store(LoginRequest $request): RedirectResponse
    {
        // Attempt authentication
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if the user's role is 'user'
            if ($user->role === 'user') {
                // Check for membership
                $membership = Membership::where('user_id', $user->id)
                    ->where('status', true)
                    ->first();

                // If user has a membership
                if ($membership) {
                    if ($membership->start_trial && $membership->end_trial) {
                        // Check trial status
                        $currentDate = date('Y-m-d');
                        if (strtotime($membership->end_trial) <= strtotime($currentDate)) {
                          //sending mail to user trial has expired
                          try {
                            $user=Auth::user();
                            $plan=Plan::find($membership["plan_id"]);
                            $membershipDetails=$membership;
                            $userDetails = ['user' => $user]; // Pass user details as an array
                            $body = view('mail.mail_templates.membership_expired_template', ['userDetails'=>$userDetails,'membershipDetails'=>$membershipDetails,'plan'=>$plan])->render();
                            $userEmailsSend[] = $user->email;
                                    // to username, to email, from username, subject, body html 
                            $response = sendMail($user->name, $userEmailsSend, 'Ai Bot', 'Trial has Expired', $body);
                
                            if ($response !== true) {
                                Log::error('Failed to send registration email', ['response' => $response]);
                            }
                        } catch (\Exception $e) {
                            Log::error('An error occurred while sending the email: ' . $e->getMessage());
                        }








                            toastr()->addInfo("Trial has expired");
                            return redirect()->route('plans');
                        } else {
                            toastr()->addInfo("Trial is still active");
                            return redirect()->route('chat_dashboard');
                        }
                    } else {
                        // Check regular membership status
                        $currentDate = date('Y-m-d');
                        if (strtotime($membership->end_date) <= strtotime($currentDate)) {
                            toastr()->addInfo("Regular membership has expired");
                            return redirect()->route('subscribe_membership');
                        } else {
                            toastr()->addInfo("Regular membership is still active");
                            return redirect()->route('chat_dashboard');
                        }
                    }
                } else {
                    toastr()->addInfo("You don't have any plan! Buy a plan first.");
                    return redirect()->route('plans');
                }
            } else {
                // If the user's role is not 'user'
                Auth::logout();
                return redirect()->route('login')->with('error', 'You do not have permission to log in.');
            }
        } else {
            // Authentication failed
            return back()->with([
                'error' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
