<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Ramsey\Uuid\Uuid; // Import the Uuid class
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class TicketController extends Controller
{


    public function chat()
    {
        $tickets = Ticket::select('id', 'uuid', 'msgfrom', 'category', 'name', 'email', 'phone', 'subject', 'description', 'created_at')
            ->whereIn('id', function ($query) {
                $query->selectRaw('MAX(id)')
                    ->from('tickets')
                    ->groupBy('uuid');
            })
            ->orderBy('uuid', 'desc')
            ->get();

        return view('admin.pages.chat', compact('tickets'));
    }

    public function ticketsave(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'category' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);

        //     // Generate UUID
        //     // $uuid = Uuid::uuid4()->toString();
        //     $uuid = mt_rand(0, 9999999999);

        // Retrieve the last ticket from the database
        $lastTicket = Ticket::latest()->first();
        // Controller code to create a new ticket
        if ($lastTicket) {
            // Get the numerical part of the last UUID
            $uuid = (int)$lastTicket->uuid;

            // Increment by 1
            $uuid++;

            // Create a new ticket instance
            $ticket = new Ticket();
            $ticket->uuid = $uuid;
        } else {
            // If the ticket table is empty, start with 1000
            $ticket = new Ticket();
            $ticket->uuid = 1000;
        }

        // Set other ticket fields
        $ticket->msgfrom = 'admin'; // Set the msgfrom field
        $ticket->category = $request->category;
        $ticket->name = $request->name;
        $ticket->email = $request->email;
        $ticket->phone = $request->phone;
        $ticket->subject = $request->subject;
        $ticket->description = $request->description;

        $ticket->save();

        // Optionally, you can return a response or redirect the user
        return redirect()->back()->with('success', 'Ticket created successfully.');
    }




    public function fetchChatMessages(Request $request, $uuid)
    {

        // Assuming you have a Message model and a relationship set up to fetch messages by ticket UUID
        $messages = Ticket::where('uuid', $uuid)->get();

        // dd($messages);

        return response()->json($messages);
    }


    public function sendReply(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'uuid' => 'required|string',
            'message' => 'required|string',
        ]);

        // Retrieve previous data based on UUID
        $previousTicket = Ticket::where('uuid', $validatedData['uuid'])->latest()->first();


        // Create a new row with updated message and created time
        $newTicket = new Ticket();
        $newTicket->category = $previousTicket->category;
        $newTicket->name = $previousTicket->name;
        $newTicket->email = $previousTicket->email;
        $newTicket->phone = $previousTicket->phone;
        $newTicket->subject = $previousTicket->subject;
        $newTicket->uuid = $validatedData['uuid'];
        $newTicket->description     = $validatedData['message'];
        $newTicket->msgfrom = 'admin'; // Set the sender as admin

        // dd( $newTicket->msgfrom ,  $newTicket->message  ,   $newTicket->uuid  ,
        //  $newTicket->subject , $newTicket->phone ,   $newTicket->email,  $newTicket->name ,  $newTicket->category );

        $newTicket->save();

        // You can do additional processing or return a response as needed
        return response()->json(['success' => true, 'message' => 'Message saved successfully']);
    }


    // function helpDeskUserSide() {
    //     $userEmail = Auth::user()->email;

    //     $tickets = Ticket::select('id', 'uuid', 'msgfrom', 'category', 'name', 'email', 'phone', 'subject', 'description', 'created_at')
    //         ->whereIn('id', function ($query) {    
    //             $query->selectRaw('MAX(id)')
    //                 ->from('tickets')
    //                 ->groupBy('uuid');
    //         })
    //         ->where('email', $userEmail)
    //         ->orderBy('uuid', 'desc')
    //         ->get();

    //     $totalTickets = $tickets->count();

    //     return view('web.helpdesk', compact('tickets', 'totalTickets'));
    // }


    public function ticketsaveuser(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'category' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);
        // Retrieve the last ticket from the database
        $lastTicket = Ticket::latest()->first();
        // Controller code to create a new ticket
        if ($lastTicket) {
            // Get the numerical part of the last UUID
            $uuid = (int)$lastTicket->uuid;
            // Increment by 1
            $uuid++;
            // Create a new ticket instance
            $ticket = new Ticket();
            $ticket->uuid = $uuid;
        } else {
            // If the ticket table is empty, start with 1000
            $ticket = new Ticket();
            $ticket->uuid = 1000;
        }
        $userEmail = Auth::user()->email;
        $username = Auth::user()->name;
        $userphone = Auth::user()->phone;
        // dd( $userEmail,   $username  , $userphone);
        // Set other ticket fields
        $ticket->msgfrom = 'user'; // Set the msgfrom field
        $ticket->category = $request->category;
        $ticket->name = $username;
        $ticket->email = $userEmail;
        $ticket->phone = $userphone;
        $ticket->subject = $request->subject;
        $ticket->description = $request->description;

        $ticket->save();

        // Optionally, you can return a response or redirect the user
        return redirect()->back()->with('success', 'Ticket created successfully.');
    }




    public function sendReplyUser(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'uuid' => 'required|string',
            'message' => 'required|string',
        ]);

        // Retrieve previous data based on UUID
        $previousTicket = Ticket::where('uuid', $validatedData['uuid'])->latest()->first();

        // Create a new row with updated message and created time
        $newTicket = new Ticket();
        $newTicket->category = $previousTicket->category;
        $newTicket->name = $previousTicket->name;
        $newTicket->email = $previousTicket->email;
        $newTicket->phone = $previousTicket->phone;
        $newTicket->subject = $previousTicket->subject;
        $newTicket->uuid = $validatedData['uuid'];
        $newTicket->description     = $validatedData['message'];
        $newTicket->msgfrom = 'user'; // Set the sender as admin

        // dd( $newTicket->msgfrom ,  $newTicket->message  ,   $newTicket->uuid  ,
        //  $newTicket->subject , $newTicket->phone ,   $newTicket->email,  $newTicket->name ,  $newTicket->category );

        $newTicket->save();

        // You can do additional processing or return a response as needed
        return response()->json(['success' => true, 'message' => 'Message saved successfully']);
    }



    function helpDeskUserSide()
    {
        $userEmail = Auth::user()->email;

        $tickets = Ticket::select('id', 'uuid', 'msgfrom', 'category', 'name', 'email', 'phone', 'subject', 'description', 'created_at')
            ->whereIn('id', function ($query) {
                $query->selectRaw('MAX(id)')
                    ->from('tickets')
                    ->groupBy('uuid');
            })
            ->where('email', $userEmail)
            ->orderBy('uuid', 'desc')
            ->get();

        $totalTickets = $tickets->count();

        return view('web.helpdesk2', compact('tickets', 'totalTickets'));
    }


    public function uploadChatImage(Request $request)
    {
        // Validate the uploaded file
        $validatedData = $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'uuid' => 'required|string'
        ]);


        // dd( $validatedData['uuid'], $validatedData['file'] );
        // Retrieve the ticket based on the provided UUID
        $previousTicket = Ticket::where('uuid', $validatedData['uuid'])->latest()->first();

        // Ensure the ticket exists
        if (!$previousTicket) {
            return response()->json(['error' => 'Ticket not found'], 404);
        }
        // dd($validatedData['message']);
        // Create a new row with updated message and created time
        $newTicket = new Ticket();
        $newTicket->category = $previousTicket->category;
        $newTicket->name = $previousTicket->name;
        $newTicket->email = $previousTicket->email;
        $newTicket->phone = $previousTicket->phone;
        $newTicket->subject = $previousTicket->subject;
        $newTicket->uuid = $validatedData['uuid'];
        $newTicket->msgfrom = 'admin'; // Set the sender as admin



        $file = $request->file('file');
        $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension(); // Generate a unique file name
        $filePath = $file->storeAs('chat_images/' . $validatedData['uuid'], $fileName, 'public');

        // Get the full URL of the stored image
        $imageUrl = asset('storage/' . $filePath);

        // Save the image URL in the chat_image column
        $newTicket->chat_image = $imageUrl;
        // dd($imageUrl);
        // Save the new ticket
        $newTicket->save();

        // Return the path of the stored file
        return response()->json([
            'success' => true,
            'message' => 'Message saved successfully',
            'image_url' => asset('storage/' . $filePath)
        ]);
    }



    public function uploadChatImageUser(Request $request)
    {
        // Validate the uploaded file
        $validatedData = $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'uuid' => 'required|string'
        ]);


        // dd( $validatedData['uuid'], $validatedData['file'] );
        // Retrieve the ticket based on the provided UUID
        $previousTicket = Ticket::where('uuid', $validatedData['uuid'])->latest()->first();

        // Ensure the ticket exists
        if (!$previousTicket) {
            return response()->json(['error' => 'Ticket not found'], 404);
        }
        // dd($validatedData['message']);
        // Create a new row with updated message and created time
        $newTicket = new Ticket();
        $newTicket->category = $previousTicket->category;
        $newTicket->name = $previousTicket->name;
        $newTicket->email = $previousTicket->email;
        $newTicket->phone = $previousTicket->phone;
        $newTicket->subject = $previousTicket->subject;
        $newTicket->uuid = $validatedData['uuid'];
        $newTicket->msgfrom = 'user'; // Set the sender as admin



        $file = $request->file('file');
        $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension(); // Generate a unique file name
        $filePath = $file->storeAs('chat_images/' . $validatedData['uuid'], $fileName, 'public');

        // Get the full URL of the stored image
        $imageUrl = asset('storage/' . $filePath);

        // Save the image URL in the chat_image column
        $newTicket->chat_image = $imageUrl;
        // dd($imageUrl);
        // Save the new ticket
        $newTicket->save();

        // Return the path of the stored file
        return response()->json([
            'success' => true,
            'message' => 'Message saved successfully',
            'image_url' => asset('storage/' . $filePath)
        ]);
    }
}
