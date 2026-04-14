<?php
namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Appointment;
use App\Models\Payment;

class DashboardController extends Controller
{
    public function index()
    {
        $totalClients = Client::count();
        $totalAppointments = Appointment::count();
        $totalRevenue = Payment::where('status', 'pago')->sum('amount');

        return view('dashboard', compact(
            'totalClients',
            'totalAppointments',
            'totalRevenue'
        ));
    }
}