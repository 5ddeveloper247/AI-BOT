<?php

namespace App\Http\Controllers;

use App\Mail\ReplyMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use App\Repositories\ContactRepositoryInterface;
use Illuminate\Support\Facades\Mail;



class ContactController extends Controller
{
    protected $contactRepository;

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function store(Request $request)
    {
        return $this->contactRepository->store($request);
    }



    // Import the Contact model at the top of your file

    // public function sendReply(Request $request)
    // {
    //     $data = $request->validate([
    //         'email' => 'required|email',
    //         'subject' => 'required|string',
    //         'reply' => 'required|string', // Change 'reply' to 'reply'
    //     ]);

    //     $email = $data['email'];
    //     $subject = $data['subject'];
    //     $reply = $data['reply']; // Corrected the variable name

    //     try {
    //         // Save the reply in the database
    //         $contact = Contact::where('email', $email)->where('subject', $subject)->first();



    //         if ($contact) {
    //             $contact->reply = $reply;
    //             $contact->save();


    //         } else {

    //             // This might happen if the email or subject doesn't match any existing contact
    //             return response()->json(['success' => false, 'message' => 'Contact not found']);
    //         }

    //         // Send email
    //         Mail::to($email)->send(new ReplyMail($subject, $reply));

    //         return response()->json(['success' => true]);
    //     } catch (\Exception $e) {
    //         return response()->json(['success' => false, 'message' => $e->getMessage()]);
    //     }
    // }
}
