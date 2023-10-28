<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Tour;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schedules = Schedule::all();
        return view('schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = Tour::all();
        return view('schedule.create', compact('tours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       // dd($request);
        $request->validate(
            [
                'tanggalBerangkat' => 'required',
                'tanggalPulang' => 'required',
                'tour_id' => 'required',
            ]
            );
        
        $schedule = Schedule::create(
            [
                "tanggalBerangkat" => $request["tanggalBerangkat"],
                "tanggalPulang" => $request["tanggalPulang"],
                "tour_id" => $request["tour_id"],
            ]
        );

        Alert::success('Success!', 'Schedule Created Successfully');

        return redirect('/schedule');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $tour = Tour::where('id', $id)->first();
        $schedules = Schedule::where('tour_id', $id)->get();
        return view('schedule.show', compact('schedules','tour'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
