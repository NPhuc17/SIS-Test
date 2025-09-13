<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('layouts.dashboard');
});


Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/academic', function () {
    return view('pages.academic');
})->name('academic');

Route::get('/course-schedule', function () {
    return view('pages.course-schedule');
})->name('course.schedule');

Route::get('/exam-schedule', function () {
    return view('pages.exam-schedule');
})->name('exam.schedule');

Route::get('/grade-transcript', function () {
    return view('pages.grade-transcript');
})->name('grade.transcript');

//Đổi sang grade cho docotor. Nhớ comment cái trên

// Route::get('/grade-transcript-doctor', function () {
//     return view('pages.grade-transcript-doctor');
// })->name('grade.transcript-doctor');

Route::get('/attendance', function () {
    return view('pages.attendance');
})->name('attendance');