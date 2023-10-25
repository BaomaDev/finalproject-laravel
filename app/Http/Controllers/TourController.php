<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tour.create');
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
            "flight_id" => $request["flight"],
        ]);
        
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::where('id', $id)->first();
        return view('tour.edit', compact('tour'));
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
        $tour = Tour::find($id);
        $tour->delete();
        return redirect('/tour');
    }
}
