<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $pendingCount = Appointment::where('status_id', 'Pending')->count();
        $approvedCount = Appointment::where('status_id', 'Approved')->count();
        $rejectedCount = Appointment::where('status_id', 'Rejected')->count();
        $upcomingAppointments = Appointment::where('status_id', 'Pending')->get();
        return view('admin.home', compact('pendingCount', 'approvedCount', 'rejectedCount', 'upcomingAppointments'));
    }
}