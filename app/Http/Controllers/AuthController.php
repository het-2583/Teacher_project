<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm(){
        return view('register');
    }

    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'PhoneNo' => 'required|tel|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'SchoolName' => 'required|string|max:255',
            'Board' => 'required|string|max:255',
            'Standard' => 'required|integer',
            'Subjects' => 'required|array', // Ensure it's an array
            'Subjects.*' => 'string|in:Maths,Physics,Chemistry,Biology,Gujarati,Sanskrit',
            'Medium' => 'required|string|max:255',
            'Total_fees' => 'required|integer',
            'Discount' => 'reguired|integer',
            'Shift' => 'required|string|max:255',
            'Reference' => 'required|string|max:255',
            'Paid_fees' => 'required|integer',
            'Remaining_amount' => 'required|integer',
            'Fees_date' => 'required|date',
            'Due_date' => 'required|date',
        ]);

        // Save user data
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'PhoneNo' => $request->PhoneNo,
            'password' => Hash::make($request->password),
            'SchoolName' => $request->SchoolName,
            'Board' => $request->Board,
            'Standard' => $request->Standard,
            'Subjects' => json_encode($request->Subjects),
            'Medium' => $request->Medium,
            'Total_fees' => $request->Total_fees,
            'Discount' => $request->Discount,
            'Shift' => $request->Shift,
            'Reference' => $request->Reference,
            'Paid_fees' => $request->Paid_fees,
            'Remaining_amount' => $request->Remaining_amount,
            'Fees_date' => $request->Fees_date,
            'Due_date' =>$request->Due_date,
            
        ]);

        // Redirect with success message
        return redirect('/register')->with('success', 'Registration successful!');
    }
}
