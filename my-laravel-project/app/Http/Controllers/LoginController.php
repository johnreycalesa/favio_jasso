<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function checkAppointment(Request $request)
    {
        return redirect()->route('admin.appointment');
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($request->only('email', 'password'))) {
            // Authentication was successful
            $user = Auth::user();

            // Output the successful login attempt to the console (optional)
            error_log('User logged in successfully: ' . $user->id);

            // Redirect to the dashboard with a success message
            return redirect('/admin/dashboard')->with('status', 'Login successful!');
        }

        // Authentication failed
        // Output the failed login attempt to the console (optional)
        error_log('Failed login attempt for email: ' . $request->email);

        // Redirect back with an error message
        return redirect()->back()->withErrors(['email' => 'Invalid credentials!'])->withInput();
    }
}
