<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;
use App\Models\Feature;




class FrontendController extends Controller
{
    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
{
    // Retrieve all plans
    $plans = Plan::with('features')->get();
    // dd(  $plans);

    // Pass the plans data to the view
    return view('home', compact('plans'));
}


    public function product()
    {
        $plans = Plan::with('features')->get();
        return view('web.product', compact('plans'));
    }
    public function pricing()
    {
    $plans = Plan::with('features')->get();
    // dd(  $plans);
    return view('web.pricing', compact('plans'));

    }
    public function tools()
    {
        return view('web.tools');
    }
    public function support()
    {
        return view('web.support');
    }
    public function contact()
    {
        return view('web.contact');
    }
    public function privacy()
    {
        return view('web.privacy');
    }
    public function termCondition()
    {
        return view('web.term_condition');
    }
    public function plans()
    {
        $plans = Plan::all();

        // Pass the plans to the view
        return view('web.plans', compact('plans'));
    }
    public function payment()
    {
        return view('web.payment');
    }
    public function chat()
    {
        return view('web.chat_dashboard');
    }


    public function faqs()
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            // If the user is authenticated, fetch FAQs where PreminumUser is 1
            $faqs = FAQ::where('active', 1)
                ->where('PreminumUser', 1)
                ->orderBy('order', 'asc')
                ->get();
        } else {
            // If the user is not authenticated, fetch FAQs where Visitor is 1
            $faqs = FAQ::where('active', 1)
                ->where('Visitor', 1)
                ->orderBy('order', 'asc')
                ->get();
        }

        // Pass the fetched FAQs to the view
        return view('web.faqs', compact('faqs'));
    }
}
