<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Flight;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::all();
        return view('tour.index', compact('tours'));
    }

    public function indexUser()
    {
        $tours = Tour::all();
        return view('welcome', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flights = Flight::all();
        return view('tour.create', compact('flights'));
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
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'date' => 'required',
            'area' => 'required',
            ]
    );

        $tour = Tour::create([
            "name" => $request["name"],
            "description" => $request["description"],
            "price" => $request["price"],
            "duration" => $request["duration"],
            "date" => $request["date"],
            "area" => $request["area"],
            "flight_id" => $request["flight_id"],
        ]);

        Alert::success('Success!', 'Tour Created Successfully');
        
        return redirect('/tour');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::where('id', $id)->first();
        
        return view('tour.show', compact('tour'));
        
    }

    public function showTour($id)
    {
        $tour = Tour::where('id', $id)->first();
        
        return view('detailtour', compact('tour'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::where('id', $id)->first();
        $flights = Flight::all();
        return view('tour.edit', compact('tour', 'flights'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'date' => 'required',
            'area' => 'required',
            
        ]);

        $tour = Tour::find($id);
        $tour->name = $request->name;
        $tour->description =  $request->description;
        $tour->price = $request->price;
        $tour->duration = $request->duration;
        $tour->date = $request->date;
        $tour->area = $request->area;
        $tour->flight_id = $request->flight_id;
        $tour->save();
        
        return redirect('/tour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            //code...
            $tour = Tour::find($id);
            $tour->delete();
            return redirect('/tour');
        } catch (Exception $e) {
            //throw $th;
            Alert::warning('Error', $e->getMessage());
            return redirect('/tour');
        }
        
    }
}
