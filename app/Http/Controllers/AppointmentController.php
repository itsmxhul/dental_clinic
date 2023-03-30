<?php

namespace App\Http\Controllers;
use App\Models\navbar;
use App\Models\appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function appointment()
    {
        $navbars = navbar::all();
        return view('appointment',compact('navbars'));
    }

    public function appointments(){
        
        return view('admin.all_appointments');
    }
    public function viewappointment(Request $request){
        $appointment = new appointment;
        $appointment->name = $request->name;
        $appointment->phone = $request->phone;
        $appointment->services = $request->services;
        $appointment->doctors = $request->doctors;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->save();
        return redirect('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(appointment $appointment)
    {
        $data=$appointment->get();
        echo $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,appointment $appointment)
    {
        $data=$appointment->find($id);
        //dd($data);
        echo $data->delete();
    }
}
