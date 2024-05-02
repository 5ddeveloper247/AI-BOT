<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;
use App\Models\Feature;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cookie;



class FrontendController extends Controller
{
    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    {
        $plans_Bot1 = Plan::with('features')->where('plan_type','Bot 1')->latest()->first();
        $plans_Bot2 = Plan::with('features')->where('plan_type','Bot 2')->latest()->first();
        $plans_Bot1_Plus_Bot2 = Plan::with('features')->where('plan_type','Bot 1 + Bot 2')->latest()->first();
  //  dd($plans_Bot1, $plans_Bot2,$plans_Bot1_Plus_Bot2 );
       
        
        return view('home',['plans_Bot1'=>$plans_Bot1,'plans_Bot2'=>$plans_Bot2,'plans_Bot1_Plus_Bot2'=>$plans_Bot1_Plus_Bot2]);
    }


    public function product()
    {
        $plans = Plan::with('features')->get();
        return view('web.product', compact('plans'));
    }

    public function pricing()
    {
        $plans_Bot1 = Plan::with('features')->where('plan_type','Bot 1')->latest()->first();
        $plans_Bot2 = Plan::with('features')->where('plan_type','Bot 2')->latest()->first();
        $plans_Bot1_Plus_Bot2 = Plan::with('features')->where('plan_type','Bot 1 + Bot 2')->latest()->first();
  //  dd($plans_Bot1, $plans_Bot2,$plans_Bot1_Plus_Bot2 );
       
        //dd($plans);
        return view('web.pricing', ['plans_Bot1'=>$plans_Bot1,'plans_Bot2'=>$plans_Bot2,'plans_Bot1_Plus_Bot2'=>$plans_Bot1_Plus_Bot2]);
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

    //C:\Users\Lenovo\Documents\GitHub\new\vendor\laravel\framework\src\Illuminate\Foundation\resources
    public function termCondition()
    {
        return view('web.term_condition');
    }
    public function plans()
    {
        $plans_Bot1 = Plan::with('features')->where('plan_type','Bot 1')->latest()->first();
        $plans_Bot2 = Plan::with('features')->where('plan_type','Bot 2')->latest()->first();
        $plans_Bot1_Plus_Bot2 = Plan::with('features')->where('plan_type','Bot 1 + Bot 2')->latest()->first();
        // Pass the plans to the view
        return view('web.plans', ['plans_Bot1'=>$plans_Bot1,'plans_Bot2'=>$plans_Bot2,'plans_Bot1_Plus_Bot2'=>$plans_Bot1_Plus_Bot2]);
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



    public function CTdashboard(Request $request)
{
    // Retrieve the search value from the request
    $searchValue = $request->input('search');
    // Check if the cookies already exist with the specified values
    // Check if the cookies exist with the specified keys
    if (!$request->hasCookie('searchValue') || !$request->hasCookie('searchResult')) {

        // here the request will be made to bot endpoint to get the search result
        $searchResult = "Hello from new chat";
        // Set the cookies only if they don't exist
        Cookie::queue('searchValue', $searchValue);
        Cookie::queue('searchResult', $searchResult);
         // Return JSON response with the search result
         return response()->json(['searchResult' => $searchResult, 'message'=>'new']);
    }

    else{
    $searchResult = "Hello from previous chat";
    $searchValue = $request->cookie('searchValue');
    $searchResult = $request->cookie('searchResult');
     // Return JSON response with the existed  search result
    return response()->json(['searchResult' => $searchResult,'message'=>'old']);
    }
}



   public function USchatDashboard(Request $request)
{
    if ($request->hasCookie('searchValue') || $request->hasCookie('searchResult')) {
        // Retrieve the search value from the cookies
        $searchValue = $request->cookie('searchValue');
        $searchResult = $request->cookie('searchResult');

        // Return the view with the search value
        return view('web.chat_dashboard_new_user', [
            'previousSearchValue' => $searchValue,
            'previousSearchResult' => $searchResult
        ]);

    }
    
    else{
        
        $searchValue = $request->cookie('searchValue');
        $searchResult = $request->cookie('searchResult');
    
        // Return the view with the search value
        return view('web.chat_dashboard_new_user', [
            'previousSearchValue' => $searchValue,
            'previousSearchResult' => $searchResult
        ]);
    }

      // Retrieve the search value from the cookies
}
}
