<?php

use App\Http\Controllers\AttendanceLessonController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/lesson');
});
Route::resource('/lesson', LessonController::class);
Route::resource('/attendance-lesson', AttendanceLessonController::class);
