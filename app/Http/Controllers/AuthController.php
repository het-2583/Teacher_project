<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'PhoneNo' => ['required', 'regex:/^[0-9]{10}$/', 'unique:users'], 
            'password' => 'required|string|min:8|confirmed',
            'SchoolName' => 'required|string|max:255',
            'Board' => 'required|string|max:255',
            'Standard' => 'required|integer',
            'Subjects' => 'required|array',
            'Subjects.*' => 'string|in:Maths,Physics,Chemistry,Biology,Gujarati,Sanskrit',
            'Medium' => 'required|string|max:255',
            'Total_fees' => 'required|integer',
            'Discount' => 'nullable|integer', // Nullable allows empty discounts
            'Shift' => 'required|string|max:255',
            'Reference' => 'required|string|max:255',
            'Paid_fees' => 'required|integer',
            'Remaining_amount' => 'required|integer',
            'Fees_date' => 'required|date',
            'Due_date' => 'required|date',
        ]);

        $User = new User;
        $User->name = $request['name'];
        $User->email = $request['email'];
        $User->PhoneNo = $request['PhoneNo'];
        $User->password = bcrypt($request['password']); // Encrypt password
        $User->SchoolName = $request['SchoolName'];
        $User->Board = $request['Board'];
        $User->Standard = $request['Standard'];
        $User->Subjects = $request['Subjects']; // Use the array directly
        $User->Medium = $request['Medium'];
        $User->Total_fees = $request['Total_fees'];
        $User->Discount = $request['Discount'];
        $User->Shift = $request['Shift'];
        $User->Reference = $request['Reference'];
        $User->Paid_fees = $request['Paid_fees'];
        $User->Remaining_fees = $request['Remaining_amount'];
        $User->Fees_date = $request['Fees_date'];
        $User->Due_date = $request['Due_date'];
        $User->save();



        // Save user data
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'PhoneNo' => $request->PhoneNo,
        //     'password' => Hash::make($request->password),
        //     'SchoolName' => $request->SchoolName,
        //     'Board' => $request->Board,
        //     'Standard' => $request->Standard,
        //     'Subjects' => json_encode($request->Subjects),
        //     'Medium' => $request->Medium,
        //     'Total_fees' => $request->Total_fees,
        //     'Discount' => $request->Discount,
        //     'Shift' => $request->Shift,
        //     'Reference' => $request->Reference,
        //     'Paid_fees' => $request->Paid_fees,
        //     'Remaining_amount' => $request->Remaining_amount,
        //     'Fees_date' => $request->Fees_date,
        //     'Due_date' =>$request->Due_date,
            
        // ]);

        // Redirect with success message
        return redirect('/hello')->with('success', 'Registration successful!');
    }
}
