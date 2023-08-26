<?php

use App\Http\Controllers\Admin\DepartmentController;

use App\Http\Controllers\AppointmentController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'admin'] ,function (){

    // Route::get('employees', [EmployeeController::class,'index'])->name('employees.index');
    // Route::get('employees/create', [EmployeeController::class,'create'])->name('employees.create');
    // Route::post('employees', [EmployeeController::class,'store'])->name('employees.store');
    Route::get('/home', function () {
        return view('admin.Home');
    })->name('home');
        Route::get('employees/archive',[EmployeeController::class,'archive'])->name('employees.archive');
    Route::post('employees/restore/{employee}',[EmployeeController::class,'restore'])->name('employees.restore');
    Route::delete('employees/deleteArchive/{employee}',[EmployeeController::class,'deleteArchive'])->name('employees.deleteArchive');
    Route::resources([
        'employees'=>EmployeeController::class,
        'departments'=>DepartmentController::class,

    ]);
});
Route::get('/', function () {
    return view('layouts.front.index');
});

Route::get('/about-us', function () {
    return view('layouts.front.about-us');
});

Route::get('/blog', function () {
    return view('layouts.front.blog');
});

Route::get('/contact', function () {
    return view('layouts.front.contact');
});

Route::get('/departments', function () {
    return view('layouts.front.departments');
});

Route::get('/doctors', function () {
    return view('layouts.front.doctors');
});

Route::get('/index', function () {
    return view('layouts.front.index');
});

Route::get('/single-blog', function () {
    return view('layouts.front.single-blog');
});





Route::get('/login',[AuthController::class ,'showLoginForm'])->name('login');

Route::get('employees',[AuthController::class ,'login'])->name('login.store');
// Route::post('/login', 'AuthController@login')->name('login');



Route::get('/appointment', [AppointmentController::class, 'index']);

Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointments.store');


