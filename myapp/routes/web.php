<<?php
use App\Http\Controllers\ItemController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AttendanceController;

//Load the employee blade file
Route::get('/', function () {
    return view('students');
});


Route::post('/save-Employee',[StudentController::class, 'store'])->name('save-Employee');
Route::get('/view',[StudentController::class, 'view'])->name('view');
Route::get('/attend/{id}',[AttendanceController::class, 'store'])->name('store');
Route::get('/attendances',[AttendanceController::class, 'retrieve'])->name('attendances');
Route::get('/export-students', [StudentController::class, 'exportStudents']);

