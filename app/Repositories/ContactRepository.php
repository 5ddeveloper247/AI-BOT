<?php

namespace App\Repositories;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactRepository implements ContactRepositoryInterface
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }

        try {
            Contact::create($request->all());
            return response()->json(['message' => 'Message sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error sending message'], 500);
        }
    }
}
