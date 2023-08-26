<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;use
Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('layouts.auth.login');
    }
    public function login(Request $request)
    {
        // Perform login logic here (e.g., using Auth::attempt())

        $data=Employee::select('SSN','fname','lname','dno')->get();
        return view('admin.employees.index',['data'=>$data]);

    }


}
