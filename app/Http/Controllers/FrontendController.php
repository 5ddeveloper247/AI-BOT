<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;
use App\Models\Feature;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Payment\doPaymentController;
use App\Models\User;
use App\Models\Payment;
use App\Models\Membership;
use App\Models\Checkout;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Date;





class FrontendController extends Controller
{
    // public function index()
    // {
    //     return view('home');
    // }

    protected $doPaymentController;

    // Injecting DoPaymentController into the constructor
    public function __construct(DoPaymentController $doPaymentController)
    {
        $this->doPaymentController = $doPaymentController;
    }





    public function index()
    {
        $plans_Bot1 = Plan::with('features')->where('plan_type', 'Bot 1')->latest()->first();
        $plans_Bot2 = Plan::with('features')->where('plan_type', 'Bot 2')->latest()->first();
        $plans_Bot1_Plus_Bot2 = Plan::with('features')->where('plan_type', 'Bot 1 + Bot 2')->latest()->first();
        //  dd($plans_Bot1, $plans_Bot2,$plans_Bot1_Plus_Bot2 );


        return view('home', ['plans_Bot1' => $plans_Bot1, 'plans_Bot2' => $plans_Bot2, 'plans_Bot1_Plus_Bot2' => $plans_Bot1_Plus_Bot2]);
    }


    public function product()
    {
        $plans = Plan::with('features')->get();
        return view('web.product', compact('plans'));
    }

    public function pricing()
    {
        $plans_Bot1 = Plan::with('features')->where('plan_type', 'Bot 1')->latest()->first();
        $plans_Bot2 = Plan::with('features')->where('plan_type', 'Bot 2')->latest()->first();
        $plans_Bot1_Plus_Bot2 = Plan::with('features')->where('plan_type', 'Bot 1 + Bot 2')->latest()->first();
        //  dd($plans_Bot1, $plans_Bot2,$plans_Bot1_Plus_Bot2 );

        //dd($plans);
        return view('web.pricing', ['plans_Bot1' => $plans_Bot1, 'plans_Bot2' => $plans_Bot2, 'plans_Bot1_Plus_Bot2' => $plans_Bot1_Plus_Bot2]);
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
        $plans_Bot1 = Plan::with('features')->where('plan_type', 'Bot 1')->latest()->first();
        $plans_Bot2 = Plan::with('features')->where('plan_type', 'Bot 2')->latest()->first();
        $plans_Bot1_Plus_Bot2 = Plan::with('features')->where('plan_type', 'Bot 1 + Bot 2')->latest()->first();
        // Pass the plans to the view
        return view('web.plans', ['plans_Bot1' => $plans_Bot1, 'plans_Bot2' => $plans_Bot2, 'plans_Bot1_Plus_Bot2' => $plans_Bot1_Plus_Bot2]);
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
            return response()->json(['searchResult' => $searchResult, 'message' => 'new']);
        } else {
            $searchResult = "Hello from previous chat";
            $searchValue = $request->cookie('searchValue');
            $searchResult = $request->cookie('searchResult');
            // Return JSON response with the existed  search result
            return response()->json(['searchResult' => $searchResult, 'message' => 'old']);
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
        } else {

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





    // registeration payment plan handling
    public function registerSubmitPlans(Request $request)
    {


        // Check if the "planTrial" input is selected
        if ($request->has('planTrial') && $request->input('planTrial') === 'on') {
            // Run your code here if "planTrial" is selected
            $trialResponse = $this->handleTrialPlan($request);   //handle the trial registerations by this function
      
            if ($trialResponse['status']) {
                // sending mail to inform about memebership
                try {
                    $user=User::find($trialResponse["membershipRecord"]["user_id"]);
                    $plan=Plan::find($trialResponse["membershipRecord"]["plan_id"]);
                    $membershipDetails=$trialResponse["membershipRecord"];
                    $userDetails = ['user' => $user]; // Pass user details as an array
                    $body = view('mail.mail_templates.membership_template', ['userDetails'=>$userDetails,'membershipDetails'=>$membershipDetails,'plan'=>$plan])->render();
                    $userEmailsSend[] = $user->email;
                            // to username, to email, from username, subject, body html 
                    $response = sendMail($user->name, $userEmailsSend, 'PANCARD', 'Membership Activated Successfully', $body);
        
                    if ($response !== true) {
                        Log::error('Failed to send registration email', ['response' => $response]);
                    }
                } catch (\Exception $e) {
                    Log::error('An error occurred while sending the email: ' . $e->getMessage());
                }
                // sending mail to inform about memebership

                toastr()->addSuccess("Welcome on board");
                return redirect()->to('chat_dashboard');
            } else {

                toastr()->addError("Oops! something went wrong");
                return redirect()->back();
            }
        }


        //handling the plan registeration

        // Extract data from the request
        $plansData = $request->all();
        // Assuming 'Central_Brand_Designer' is at index 1
      
        $planId = array_values($plansData)[1];

        // Find the plan  
        $plan = Plan::find($planId);
        // Extract relevant data from the plan
        $id = (string)$plan->id; // Convert to string for concatenation
        $planName = (string)$plan->plan_name; // Convert to string for concatenation
        $planCreatedAt = (string)$plan->created_at; // Convert to string for concatenation


        // Concatenate data for encryption
        $encryptionData = $id . $planName . $planCreatedAt;

        // Encrypt the data
        $encryptedId = Crypt::encryptString($encryptionData);

        Session::put(['plan' => $plan, 'encryptedId' => $encryptedId, 'encryptionData' => $encryptionData]);

        return redirect()->route('payment');
        // return redirect()->to('payment')->with('encryptedId', 'plan');

    }


    public function handleTrialPlan(Request $request)    //this function is responsible for handling the trial registerations
    {
        $plan = Plan::find(1);  //finding the default plan 
        try {

            $planRecord = Plan::find($plan->id);
            $userRecord = User::find(auth()->user()->id);
            $membershipStartDate = Date::now();
            $planDuration = $plan->duration;
            $membershipEndDate = $membershipStartDate->addDays($planDuration);
            $membershipRecord = Membership::create([
                'user_id' => $userRecord->id,
                'plan_id' => $planRecord->id,
                'payment_status' => true,
                'status' => true,
                'trial' => true,
                'days' => $plan->duration,
                // 'start_date' => Date::now(),
                // 'end_date' => $membershipEndDate,  
                'start_trial' => Date::now(),
                'end_trial' => $membershipEndDate,
            ]);

            $PaymentRecord = Payment::create([
                'user_id' => $userRecord->id,
                'plan_id' => $planRecord->id,
                'membership_id' => $membershipRecord->id,
                'amount' => $plan->plan_price,
                'status' => true,
                'payment_gateway' => "AuthorizeNet",
                'transaction_id' => "Trial Plan",
                'auth_code' => "Trial Plan",
                // 'currency'=>""

            ]);

            //   toastr()->timeOut(10000)->addInfo("Getting things ready for you....");
            // toastr()->addSuccess("Payment Successful!");
            // return redirect()->to('chat_dashboard');
            $data=['status'=>true,'membershipRecord'=>$membershipRecord];
            return $data;
        } catch (\Exception $e) {
            //handle payment exception
            return false;
            // dd($e);
            // toastr()->addError("Oops! something went wrong");
            // return redirect()->back();
        }
    }



    public function payment(Request $request)
    {
        // Retrieve the encrypted data from the session
        $encryptedId = session('encryptedId');
        $encryptedData = session('encryptedData');
        $plan = session('plan');
        // Decrypt the data if needed
        // Pass the decrypted data to the view
        return view('web.payment', ['plan' => $plan, 'encryptedId' => $encryptedId, 'encryptedData' => $encryptedData]);
    }





    public function registerPlansCheckoutSubmit(Request $request)
    {

        try {
            $data = $request->all();

            $planId = $data['planId'];
            $pId = $data['pId'];
            $plan = Plan::find($pId); //finding the plan by plan id 
            $id = (string)$plan->id; // Convert to string for concatenation
            $planName = (string)$plan->plan_name; // Convert to string for concatenation
            $planCreatedAt = (string)$plan->created_at; // Convert to string for concatenation
            $encryptionData = $id . $planName . $planCreatedAt;
            $planIdx = $planId;
            // DeEncrypt the data
            $decryptedData = Crypt::decryptString($planIdx);

            if ($decryptedData == $encryptionData) {
                //payment response
                $response = $this->doPaymentController->doPayment($request);
                $responseData = $response->getData();


                if ($responseData->status == 'ok') {
                    // handle payment 




                    try {

                        $planRecord = Plan::find($pId);
                        $userRecord = User::find(auth()->user()->id);
                        $planDuration = $plan->duration;
                        $membershipStartDate = Date::now();
                        $membershipEndDate = $membershipStartDate->addDays($planDuration);


                        // make the any existing membership expire
                        $existingMembership = Membership::where('user_id', Auth::user()->id)->first();
                        if ($existingMembership) {
                            $existingMembership->status = false;
                            $existingMembership->save();
                        }

                        $membershipRecord = Membership::create([
                            'user_id' => $userRecord->id,
                            'plan_id' => $planRecord->id,
                            'payment_status' => true,
                            'status' => true,
                            'trial' => true,
                            'days' => $plan->duration,
                            'start_date' => Date::now(),
                            'end_date' => $membershipEndDate,

                        ]);




                        $PaymentRecord = Payment::create([
                            'user_id' => $userRecord->id,
                            'plan_id' => $planRecord->id,
                            'membership_id' => $membershipRecord->id,
                            'amount' => $plan->plan_price,
                            'status' => true,
                            'payment_gateway' => "AuthorizeNet",
                            'transaction_id' => $responseData->Transaction_ID,
                            'auth_code' => $responseData->Auth_Code,
                            'trial' => false,
                            //'membership_type'=>" "
                            // 'currency'=>""

                        ]);




                        try {
                            $user=User::find($membershipRecord["user_id"]);
                          
                            $plan=Plan::find($membershipRecord["plan_id"]);
                            $membershipDetails=$membershipRecord;
                            $userDetails = ['user' => $user]; // Pass user details as an array
                            $body = view('mail.mail_templates.membership_template', ['userDetails'=>$userDetails,'membershipDetails'=>$membershipDetails,'plan'=>$plan])->render();
                            $userEmailsSend[] = $user->email;
                                    // to username, to email, from username, subject, body html 
                            $response = sendMail($user->name, $userEmailsSend, 'PANCARD', 'Membership Activated Successfully', $body);
                
                            if ($response !== true) {
                                Log::error('Failed to send registration email', ['response' => $response]);
                            }
                        } catch (\Exception $e) {
                            Log::error('An error occurred while sending the email: ' . $e->getMessage());
                        }

                        //   toastr()->timeOut(10000)->addInfo("Getting things ready for you....");
                        toastr()->addSuccess("Payment Successful!");
                        return redirect()->to('chat_dashboard');
                    } catch (\Exception $e) {
                        //handle payment exception

                        toastr()->addError("Oops! something went wrong");
                        return redirect()->back();
                    }
                } elseif ($responseData->status == 'failed') {
                    //handle payment failed
                    toastr()->addError("Oops! payment has failed");
                    return redirect()->back();
                } else {

                    //handle payment exception
                    toastr()->addError("Oops! something went wrong");
                    return redirect()->back();
                }
            } else {

                toastr()
                    ->closeButton(true)
                    ->timeOut(10000)
                    ->addWarning('Critical Warning! security breache occured');

                //store the breached information here 

                return redirect()->back();
            }
        } catch (\Exception $e) {

            // handle the function exception

            toastr()
                ->closeButton(true)
                ->timeOut(10000)
                ->addError('Oops! something went wrong');

            return redirect()->back();
        }
    }
}
