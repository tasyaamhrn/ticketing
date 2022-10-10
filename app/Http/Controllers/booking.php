<?php

namespace App\Http\Controllers;

use App\Models\Booking as ModelsBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PDF;

class booking extends Controller
{
    public function index($id)
    {
        $booking = ModelsBooking::find($id);
        return view('detail_booking', compact('booking'));
    }
    public function store(Request $request)
    {
        $randomString = Str::random(15);

        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
       $tiket = ModelsBooking::create([
            'id_ticketing'=>  $randomString,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        return redirect('/booking/'.$tiket->id);
    }
    public function exportPDF($id)
    {
        $booking = ModelsBooking::find($id);
        $pdf = PDF::loadView('booking-pdf', ['booking' => $booking]);
        return $pdf->download('cetak-ticket.pdf');
    }
}
