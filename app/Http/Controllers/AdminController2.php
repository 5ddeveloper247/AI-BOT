<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController2 extends Controller
{
    public function index()
    {
        $admins = User::where('role', 'admin')->get();
        return view('admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admins.create');
    }





    public function store(Request $request)
{
    // Validate request data
    // return json_encode($request->all());
    $validator = Validator::make($request->all(), [
        'createFullNameInput' => 'required',
        'createEmailInput' => 'required|email|unique:users,email',
        'createPhoneInput' => 'required|max:14',
        'createPasswordInput'=>'required',
        // 'createStatusInput' => 'required|accepted',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    // Create new admin
    $admin = new User();
    $admin->name = $request->createFullNameInput;
    $admin->email = $request->createEmailInput;
    $admin->password = Hash::make($request->createPasswordInput);
    $admin->role = 'admin';
    $admin->active = $request->createStatusInput === 'on' ? true : false;
    $admin->save();

    return response()->json(['success' => 'Admin created successfully.'], 200);
}









    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        // Validate request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        // Update admin
        $admin = User::findOrFail($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();

        return redirect()->route('admins.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy($id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();

        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully.');
    }
}
