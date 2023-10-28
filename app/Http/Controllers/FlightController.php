<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::all();
        return view('flight.index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flight.create');
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
                'airline' => 'required',
                'date' => 'required',
                'departure' => 'required',
                'arrival' => 'required',
            ]
        );

        $flights = Flight::create([
            'airline' => $request["airline"],
            'date' => $request["date"],
            'departure' => $request["departure"],
            'arrival' => $request["arrival"], 
        ]);

        Alert::success('Success!', 'Flight Created Successfully');

        return redirect('/flight');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flight = Flight::where('id', $id)->first();
        return view('flight.show', compact('flight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flight = Flight::where('id', $id)->first();
        return view('flight.edit', compact('flight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'airline' => 'required',
                'date' => 'required',
                'departure' => 'required',
                'arrival' => 'required',
            ]
        );
        $flight = Flight::find($id);
        $flight->airline = $request["airline"];
        $flight->date = $request["date"];
        $flight->departure = $request["departure"];
        $flight->arrival = $request["arrival"];
        $flight->save();
        
        
        return redirect('/flight');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $flight = Flight::find($id);
            $flight->delete();
            return redirect('/flight');
   
          } catch (Exception $e) {
            Alert::error('Error', $e->getMessage());
            return redirect('/flight');
          
          }
    }
}
