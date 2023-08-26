<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{

    public function index(){
        return view('layouts.front.appointment');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'department' => 'required',
            'Ldate' => 'required',
            'Ltime' => 'required',
            'description'=>'nullable',
            'Dno'=>'numeric',

        ]);

        //Appointment::create($validatedData);

        return redirect()->back()->with('success', 'Appointment created successfully.');
    }


}
