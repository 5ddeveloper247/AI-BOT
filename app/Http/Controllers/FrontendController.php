<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;



class FrontendController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function product()
    {
        return view('web.product');
    }
    public function pricing()
    {
        return view('web.pricing');
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
