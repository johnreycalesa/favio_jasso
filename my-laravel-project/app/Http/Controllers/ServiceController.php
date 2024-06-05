<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service', compact('services'));
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service_update', compact('service'));
    }


    public function create()
    {
        return view('admin.service_create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'service_description' => 'required|string|max:500',
            'status' => 'required|string|in:Active,Inactive',
        ]);

        $service = new Service();
        if ($service) {
            $service->service_name = $request->input('service_name');
            $service->service_description = $request->input('service_description');
            $service->status = $request->input('status');
            $service->save();
            return redirect()->route('admin.service')->with('success', 'Service created successfully!');
        } else {
            return redirect()->route('admin.service')->with('error', 'Service not created!');
        }
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required',
            'service_description' => 'required',
            'status' => 'required'
        ]);

        $service = Service::find($id);
        if ($service) {
            $service->service_name = $request->service_name;
            $service->service_description = $request->service_description;
            $service->status = $request->status;
            $service->save();
            return redirect()->route('admin.service')->with('success', 'Service updated successfully!');
        } else {
            return redirect()->route('admin.service')->with('error', 'Service not found!');
        }
    }


    public function destroy($id)
    {
        Service::destroy($id);
        return response()->json(null, 204);
    }
}
