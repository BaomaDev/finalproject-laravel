<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Tour;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('schedule.index', compact('schedules'));
    }

    public function create()
    {
        $tours = Tour::all();
        return view('schedule.create', compact('tours'));
    }

    public function store(Request $request)
    {   
        $request->validate([
            'tanggalBerangkat' => 'required',
            'tanggalPulang' => 'required',
            'tour_id' => 'required',
        ]);
        
        Schedule::create([
            'tanggalBerangkat' => $request->input('tanggalBerangkat'),
            'tanggalPulang' => $request->input('tanggalPulang'),
            'tour_id' => $request->input('tour_id'),
        ]);

        Alert::success('Success!', 'Schedule Created Successfully');

        return redirect('/schedule');
    }

    public function show($id)
    {  
        $tour = Tour::where('id', $id)->first();
        $schedules = Schedule::where('tour_id', $id)->get();
        return view('schedule.show', compact('schedules', 'tour'));
    }

    public function edit($id)
    {
        $schedule = Schedule::find($id);
        $tours = Tour::all();
        return view('schedule.edit', compact('schedule', 'tours'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggalBerangkat' => 'required',
            'tanggalPulang' => 'required',
            'tour_id' => 'required',
        ]);

        $schedule = Schedule::find($id);
        $schedule->tanggalBerangkat = $request->input('tanggalBerangkat');
        $schedule->tanggalPulang = $request->input('tanggalPulang');
        $schedule->tour_id = $request->input('tour_id');
        $schedule->save();

        return redirect('/schedule');
    }

    public function destroy($id)
    {
        try {
            $schedule = Schedule::find($id);
            $schedule->delete();
            Alert::success('Success!', 'Schedule Deleted Successfully');
        } catch (Exception $e) {
            Alert::error('Error', $e->getMessage());
        }

        return redirect('/schedule');
    }
}
