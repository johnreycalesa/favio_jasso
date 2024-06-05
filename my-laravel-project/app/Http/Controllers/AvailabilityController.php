<?php

namespace App\Http\Controllers;

use App\Models\Availability;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class AvailabilityController extends Controller
{
    public function index()
    {
        $availabilities = Availability::all();
        return view('admin.availability', compact('availabilities'));
    }

    public function show($id)
    {
        $availability = Availability::findOrFail($id);
        return response()->json($availability);
    }

    public function create()
    {
        $services = Service::all();
        return view('admin.availability_create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
            'available_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        $availability = new Availability();
        if ($availability) {
            $availability->service_id = $request->service_id;
            $availability->available_date = $request->available_date;
            $availability->start_time = $request->start_time;
            $availability->end_time = $request->end_time;
            $availability->status = $request->status;
            $availability->save();
            return redirect()->route('admin.availability')->with('success', 'Availability created successfully!');
        } else {
            return redirect()->route('admin.availability')->with('error', 'Availability not created!');
        }
    }

    public function update(Request $request, $id)
    {
        $availability = Availability::findOrFail($id);
        $availability->update($request->all());
        return response()->json($availability, 200);
    }

    public function destroy($id)
    {
        Availability::destroy($id);
        return response()->json(null, 204);
    }
}
