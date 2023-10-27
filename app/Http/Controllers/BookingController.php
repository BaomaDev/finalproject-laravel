<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\User;
use App\Models\Flight;
use App\Models\Schedule;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('book.index', compact('bookings'));
    }

    public function indexUser()
    {
        $bookings = Booking::where('user_id', Auth::user()->id)->get();
        //dd($bookings);
        return view('managebook', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate(
            [
                'payment' => 'required',             
            ]
        );
        $booking = Booking::create([
            "date" => Carbon::now(),
            "payment" => $request["payment"],
            "user_id" => Auth::user()->id,
            "schedule_id" => $request["schedule_id"],
        ]);
        
        return redirect('create-pdf');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($tour_id)
    {
        //dd(Auth::user());
        $customers = User::where('id', Auth::user()->id)->first();
        $flights = Flight::all();
        $tours = Tour::where('id',$tour_id)->first();
        $schedules = Schedule::where('tour_id', $tour_id)->get();
        return view('book.show', compact('customers','tours', 'flights','schedules'));
    }

    public function showSchedule($tour_id)
    {
        //dd(Auth::user());
        $customers = User::where('id', Auth::user()->id)->first();
        $flights = Flight::all();
        $tours = Tour::where('id',$tour_id)->first();
        $schedules = Schedule::where('tour_id', $tour_id)->get();
        return view('booking', compact('customers','tours', 'flights','schedules'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function createPDF() 
    {    
        $bookings = Booking::where('user_id', Auth::user()->id )->first();
     
        $pdf = Pdf::loadView('pdf', ['data' => $bookings]);
        return $pdf->stream();
        //return $pdf->download();
    }
    

}
