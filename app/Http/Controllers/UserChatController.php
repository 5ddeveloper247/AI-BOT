<?php

namespace App\Http\Controllers;

use App\Helpers\MembershipHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;
use App\Models\Membership;
use App\Models\UserChat;




class UserChatController extends Controller
{


    public function storeMessage(Request $request)
    {
        // Validate the incoming request if needed
        $request->validate([
            'message' => 'required|string',
            'new_chat' => 'required|boolean', // Ensure new_chat is boolean
            'chat_id' => 'nullable|integer', // Ensure chat_id is nullable and integer
        ]);

        // Get the value of new_chat from the request
        $isNewChat = $request->input('new_chat');
        $chatId = $request->input('chat_id'); // Get the chat_id from the request

        // Get the authenticated user
        $user = Auth::user();

        // Initialize $message variable
        $message = $request->message;
        // dd($isNewChat,   $chatId ,   $message);
        // If it's not a new chat and chatId exists, save the message under the existing chat

        if (!$isNewChat) {
            // dd(  $isNewChat ,  $chatId);
            // Check if the chat exists
            $chat = Chat::find($chatId);
            if (!$chat) {
                return response()->json(['success' => false, 'message' => 'Chat not found'], 404);
            }
            // Store the message in the user_chats table
            $userChat = new UserChat();
            $userChat->user_id = $user->id;
            $userChat->chat_id = $chatId;
            $userChat->user_message = $message;
            $userChat->bot_reply = ''; // You may set bot_reply as per your requirements
            $userChat->msgfrom = 'user';
            $userChat->save();



            $membershipRecord = Membership::where('user_id', $user->id)->where('status', true)->first();
            $setChatInputNetCount_Record = MembershipHelpers::setChatInputNetCount($membershipRecord->id, $request->message);


            
            UserChat::create([
                'user_id' => auth()->id(),
                'chat_id' => $chatId,
                'user_message' => null, // Ensure user_message is null for admin replies
                'msgfrom' => 'admin', // Set msgfrom as 'admin'
                'bot_reply' => "Your Boat Response is here!........ ",
            ]);
           
             //saving the output word count of the user input from user chat
            // we are just saving th static response this: Your Boat Response is here!........ 
            $setChatOutputNetCount_Record = MembershipHelpers::setChatOutputNetCount($membershipRecord->id, "Your Boat Response is here!........");
            // Pass the chat ID with the response
            return response()->json([
                'success' => true,
                'chat_id' => $chatId,
                'isNewChat' => $isNewChat,
                'message' => $message, // Pass the message in the response
                'bot_reply' => "Your Boat Response is here!........ ",
                'setChatInputNetCount_Record' => $setChatInputNetCount_Record,
                'setChatOutputNetCount_Record' => $setChatOutputNetCount_Record,
            ]);
        }

        // If it's a new chat, create a new chat and save the message
        if ($isNewChat) {

            $chat = new Chat();
            $chat->user_chat = $message;
            $chat->user_id = $user->id;
            $chat->new_chat = $isNewChat; // Set new_chat flag
            $chat->save();
            // Save the message details in the UserChat table
            $userChat = new UserChat();
            $userChat->user_id = $user->id;
            $userChat->chat_id = $chat->id; // Use the newly created chat's ID
            $userChat->user_message = $message;
            $userChat->bot_reply = '';
            $userChat->msgfrom = 'user'; // You may set bot_reply as per your requirements
            $userChat->save();
            $chatid = $chat->id;

            // Pass the chat ID with the response
            //saving the input word count of the user input from user chat
            $membershipRecord = Membership::where('user_id', $user->id)->where('status', true)->first();
            $setChatInputNetCount_Record = MembershipHelpers::setChatInputNetCount($membershipRecord->id, $request->message);





            UserChat::create([
                'user_id' => auth()->id(),
                'chat_id' => $chatid,
                'user_message' => null, // Ensure user_message is null for admin replies
                'msgfrom' => 'admin', // Set msgfrom as 'admin'
                'bot_reply' => "Your Boat Response is here!........ ",
                
            ]);


            //saving the output word count of the user input from user chat
            // we are just saving th static response this: Your Boat Response is here!........ 
            $setChatOutputNetCount_Record = MembershipHelpers::setChatOutputNetCount($membershipRecord->id, "Your Boat Response is here!........");

            return response()->json([
                'success' => true,
                'chat_id' => $chatid,
                'isNewChat' => $isNewChat,
                'message' => $message, // Pass the message in the response
                'bot_reply' => "Your Boat Response is here!........ ",
                'setChatInputNetCount_Record' => $setChatInputNetCount_Record,
                'setChatOutputNetCount_Record' => $setChatOutputNetCount_Record,
            ]);
        }
    }


    public function delete($id)
    {
        $chat = Chat::find($id);

        if (!$chat) {
            return response()->json(['message' => 'Chat not found.'], 404);
        }

        $chat->delete();

        return response()->json(['message' => 'Chat deleted successfully.']);
    }


    public function fetchMessages($chatId)
    {
        // Retrieve all conversation messages associated with the given chat ID
        $messages = UserChat::where('chat_id', $chatId)
            ->orderBy('created_at', 'asc')
            ->get(['user_message', 'msgfrom', 'bot_reply', 'created_at']); // Adjust fields as needed


        //  dd(  $messages);
        return response()->json([
            'chat_id' => $chatId,
            'messages' => $messages
        ]);
    }




    public function sendAdminReply(Request $request)
    {
        // Validate the request data
        $request->validate([
            'bot_reply' => 'required|string',
            'chat_id' => 'nullable|integer', // Ensure chat_id is nullable and integer
        ]);

        $boat_message = $request->input('bot_reply');
        $chatId = $request->input('chat_id');

        // Save the admin reply into the database
        UserChat::create([
            'user_id' => auth()->id(),
            'chat_id' => $chatId,
            'user_message' => null, // Ensure user_message is null for admin replies
            'msgfrom' => 'admin', // Set msgfrom as 'admin'
            'bot_reply' => $boat_message,
        ]);


        $membershipRecord = Membership::where('user_id', Auth::user()->id)->where('status', true)->first();
        $setChatInputNetCount_Record = MembershipHelpers::setChatInputNetCount($membershipRecord->id, $request->message);

        return response()->json([
            'chat_id' => $chatId,
            'message' => 'Admin reply sent successfully',
            'success' => true,
            'boat_reply' => $boat_message // Pass the boat reply in the response
        ]);
    }
}
