<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Flight;
use App\Models\Schedule;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Response;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        // $customers = Customer::all();
        // $tours = Tour::all();
        // return view('book.create', compact('customers','tours'));
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
            "customer_id" => $request["customer_id"],
            "flights_id" => $request["flight_id"],
            "schedule_id" => $request["schedule_id"],
        ]);
        
        return redirect('/tour');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($tour_id)
    {
        $customers = Customer::all();
        $flights = Flight::all();
        $tours = Tour::where('id',$tour_id)->first();
        $schedules = Schedule::where('tour_id', $tour_id)->get();
        return view('book.show', compact('customers','tours', 'flights','schedules'));
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

}
