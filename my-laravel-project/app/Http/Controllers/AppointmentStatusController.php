<?php

namespace App\Http\Controllers;

use App\Models\AppointmentStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentStatusController extends Controller
{
    public function index()
    {
        $statuses = AppointmentStatus::all();
        return response()->json($statuses);
    }

    public function show($id)
    {
        $status = AppointmentStatus::findOrFail($id);
        return response()->json($status);
    }

    public function store(Request $request)
    {
        $status = AppointmentStatus::create($request->all());
        return response()->json($status, 201);
    }

    public function update(Request $request, $id)
    {
        $status = AppointmentStatus::findOrFail($id);
        $status->update($request->all());
        return response()->json($status, 200);
    }

    public function destroy($id)
    {
        AppointmentStatus::destroy($id);
        return response()->json(null, 204);
    }
}