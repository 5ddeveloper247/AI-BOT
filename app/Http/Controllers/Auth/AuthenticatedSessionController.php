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
    public function store(LoginRequest $request)
    {



        // dd("kajdkfalsdf");
        $request->authenticate();
        $request->session()->regenerate();
        $user = Auth::user();

        //is there any membership user have
        $membership = Membership::where('user_id', $user->id)->whereAnd('status', true)->first();
        if (!$membership) {
            toastr()->addInfo("You don't have any plan! buy a plan first");
            return redirect()->to('plans');
        }


        //check the trial membership status
        $trialStatus = Membership::where('user_id', $user->id)
            ->where('status', true)
            ->whereNotNull('start_trial')
            ->whereNotNull('end_trial')
            ->first();

        if ($trialStatus) {
            $start_trial = $trialStatus->start_trial;
            $end_trial = $trialStatus->end_trial;
            $currentDate = date('Y-m-d');

            if (strtotime($end_trial) <= strtotime($currentDate)) {
                // Trial has expired
                toastr()->addInfo("Trial has expired");
                return redirect()->to('plans');
            } else {
                // Trial is still active
                toastr()->addInfo("trial still active ");
                return redirect()->to('chat_dashboard');
            }
        }




        $membershipStatus = Membership::where('user_id', $user->id)
            ->where('status', true)
            ->whereNull('start_trial')
            ->whereNull('end_trial')
            ->first();

        if ($membershipStatus) {
            $membershipStart_date = $membershipStatus->start_date;
            $membershipEnd_date = $membershipStatus->end_date;
            $currentDate = date('Y-m-d');

            if (strtotime($membershipEnd_date) <= strtotime($currentDate)) {
                // Regular membership has expired
                toastr()->addInfo("Regular membership has expired");
                return redirect()->to('subscribe_membership');
                //  return redirect()->to('renew_membership');
            } else {
                // Regular membership is still active
                toastr()->addInfo("Regular membership is still active");
                return redirect()->to('chat_dashboard');
            }
        } else {
            // Handle the case when there's no active regular membership
            return redirect()->to('subscribe_membership');
        }




        // return redirect()->intended(url('/chat_dashboard'));
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
