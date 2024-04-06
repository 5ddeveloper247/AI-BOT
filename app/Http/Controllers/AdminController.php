<?php

namespace App\Http\Controllers;


use App\Mail\ReplyMail;
use Illuminate\Support\Facades\Validator;
use App\Repositories\ContactRepositoryInterface;
use App\Models\Contact;
use App\Models\User;
use App\Models\Plan;
use App\Models\FAQ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\MyMail;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.pages.index');
    }

    public function home()
    {
        return view('admin.pages.home');
    }


    public function users()
    {
        $users = User::all();
        return view('admin.pages.user', compact('users')); // Make sure you have imported the User model
    }

    public function toggleActive(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $user->active = !$user->active;
        $user->save();

        return response()->json(['message' => 'User active state toggled successfully']);
    }

    public function destroy($userId)
    {
        $user = User::findOrFail($userId);

        if ($user->delete()) {
            $users = User::all(); // Fetch the updated list of users
            return response()->json(['success' => true, 'users' => $users]);
        } else {
            return response()->json(['success' => false], 500);
        }
    }

    public function products()
    {

        return view('admin.pages.products');
    }

    public function pricing()
    {
        // Assuming you have a Plan model and you retrieve plans from the database
        $plans = Plan::all(); // Fetch plans from the database, adjust this according to your schema

        // Pass the plans data to the view
        return view('admin.pages.pricing', ['plans' => $plans]);
    }

    public function tools()
    {
        return view('admin.pages.tools');
    }

    public function support()
    {
        return view('admin.pages.support');
    }

    public function contact()
    {
        return view('admin.pages.contact');
    }



    public function updateUser(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'fullName' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'status' => 'required|boolean',
        ]);
        // Find the user by email (you can use any unique identifier)
        $user = User::where('email', $request->input('email'))->first();
        // Update user details
        if ($user) {
            $user->name = $request->input('fullName');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->active = $request->input('status');
            $user->save();

            return response()->json(['message' => 'User details updated successfully'], 200);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    public function inbox()
    {

        $contacts = Contact::orderBy('created_at', 'desc')->get();

        return view('admin.pages.contact', compact('contacts'));
    }

    public function destroycontact($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return response()->json(['success' => true]);
    }
    public function markAsViewed($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->viewed = true;
        $contact->save();

        return response()->json(['success' => true]);
    }

    public function sendReply(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'reply' => 'required|string',
            'attachments.*' => 'nullable|file|max:2048', // Assuming max file size is 2MB
        ]);

        $email = $data['email'];
        $subject = $data['subject'];
        $reply = $data['reply'];

        try {
            // Save the reply and attachments in the database
            $contact = Contact::where('email', $email)->where('subject', $subject)->first();

            if ($contact) {
                $contact->reply = $reply;

                // Save attachments' filenames in the database
                $attachments = [];
                if ($request->hasFile('attachments')) {
                    foreach ($request->file('attachments') as $attachment) {
                        $filename = $attachment->store('attachments');
                        $attachments[] = $filename;
                    }
                }
                $contact->attachments = $attachments;

                $contact->save();
            } else {
                // Contact not found
                return response()->json(['success' => false, 'message' => 'Contact not found']);
            }

            // Send email
            Mail::to($email)->send(new ReplyMail($subject, $reply, $attachments));

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }


    public function faqs()
    {
        $faqs = FAQ::orderBy('order', 'asc')->get();
        // Pass the sorted FAQs to the view
        return view('admin.pages.faqs', compact('faqs'));
    }


    public function toggleFAQ($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->active = !$faq->active;
        $faq->save();

        return response()->json(['success' => true]);
    }

    public function deleteFAQ($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->delete();

        return response()->json(['success' => true]);
    }


    // public function updateFAQ(Request $request, $id)
    // {
    //     $faq = FAQ::findOrFail($id);
    //     $faq->question = $request->question;
    //     $faq->answer = $request->answer;
    //     $faq->save();

    //     return response()->json(['success' => true]);
    // }

    public function storeFAQ(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'premiumUser' => 'nullable|boolean',
            'visitor' => 'nullable|boolean',
        ]);

        // Create a new FAQ instance
        $faq = new FAQ();
        $faq->question = $request->question;
        $faq->answer = $request->answer;

        // Set Premium User and Visitor values if provided
        $faq->PreminumUser = $request->premiumUser ?? false;
        $faq->visitor = $request->visitor ?? false;

        // dd($faq->question  ,    $faq->answer  , $faq->premiumUser ,      $faq->visitor);
        // Save the new FAQ
        $faq->save();

        // Optionally, you can return a response indicating success
        return response()->json(['success' => true, 'message' => 'FAQ created successfully']);
    }


    public function toggleVisitorActive($id)
    {
        $faq = FAQ::findOrFail($id);

        $faq = FAQ::findOrFail($id);
        $faq->Visitor = !$faq->Visitor;
        $faq->save();

        return response()->json(['success' => true]);
    }

    public function togglePreminum($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->PreminumUser = !$faq->PreminumUser;
        $faq->save();

        return response()->json(['success' => true]);
    }

    public function updateFaqsOrder(Request $request)
    {
        // Retrieve the order array from the request
        $order = $request->input('order');

        // Loop through the sorted faqs and update their order in the database
        foreach ($order as $index => $faqId) {
            // Find the FAQ by its ID and update its order
            FAQ::where('id', $faqId)->update(['order' => $index + 1]);
        }

        // Return a JSON response indicating success
        return response()->json(['success' => true]);
    }


public function updateFAQ(Request $request, $id)
{
    // Find the FAQ by its ID
    $faq = FAQ::findOrFail($id);

    // Validate the incoming request data
    $validatedData = $request->validate([
        'question' => 'required|string',
        'answer' => 'required|string',
        'premiumUser' => 'nullable|boolean',
        'visitor' => 'nullable|boolean',
    ]);

    $faq->question = $request->question;
    $faq->answer = $request->answer;

    // Set Premium User and Visitor values if provided
    $faq->PreminumUser = $request->premiumUser ?? false;
    $faq->visitor = $request->visitor ?? false;
    // Save the updated FAQ
    $faq->save();

    // Optionally, you can return a response indicating success
    return response()->json(['success' => true, 'message' => 'FAQ updated successfully']);
}
}