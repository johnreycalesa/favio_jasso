<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use function Laravel\Prompts\error;

class CustomerController extends Controller
{

    public function portfolio()
    {
        return view('portfolio');
    }

    public function advocacy()
    {
        return view('advocacy');
    }

    // "/contact" get API
    public function contact()
    {
        $services = Service::all();
        return view('contact', compact('services'));
    }

    public function about()
    {
        return view('about');
    }

    public function book(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'phone_no' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $contact = new User();
        $contact->service_id = $request->service_id;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->phone_no = $request->phone_no;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }
}
