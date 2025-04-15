<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Client;
use App\Models\Activity;
use Barryvdh\DomPDF\Facade as PDF;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class ReservationController extends Controller
{
    public function create()
    {
        $clients = Client::all();
        $activities = Activity::all();
        return view('reservations.create', compact('clients', 'activities'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'activity_id' => 'required|exists:activities,id',
            'size' => 'required',
            'payment_method' => 'required'
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $paymentIntent = PaymentIntent::create([
            'amount' => 5000,
            'currency' => 'usd',
            'payment_method' => $request->payment_method,
            'confirmation_method' => 'manual',
            'confirm' => true,
        ]);

        $reservation = Reservation::create([
            'client_id' => $request->client_id,
            'activity_id' => $request->activity_id,
            'size' => $request->size,
            'confirmed' => true,
        ]);

        $pdf = PDF::loadView('pdf.trip', compact('reservation'));
        return $pdf->download('trip-details.pdf');
    }
}
