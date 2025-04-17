<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::latest()->get();
        return view('admin.reservation.index', compact('reservations'));
    }

    public function create()
    {
        return view('admin.reservation.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'date_time' => 'required|date',
                'destination' => 'required|string',
                'message' => 'nullable|string',
            ]);

            Reservation::create([
                'name' => $request->name,
                'email' => $request->email,
                'date_time' => $request->date_time,
                'destination' => $request->destination,
                'message' => $request->message,
            ]);

            return back()->with('success', 'Rezervasyon başarıyla alındı!');
        } catch (\Exception $e) {

            return back()->with('error', 'Rezervasyon kaydedilemedi. Lütfen tekrar deneyin.');
        }
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('admin.reservation.edit', compact('reservation'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'destination' => 'required|string|max:255',
            'date_time' => 'required|date',
            'message' => 'required|string',
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->update($request->all());

        return redirect()->route('admin.reservation.index')
            ->with('success', 'Rezervasyon başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('admin.reservation.index')
            ->with('success', 'Rezervasyon silindi.');
    }

}
