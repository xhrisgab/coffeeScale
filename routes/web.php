<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

// in order to navBar menu

Route::get('/',[indexController::class,'getIndexView']);

//Menu
Route::get('menu', function () {
    return view('menu');
});

//Reservation Form
Route::get('reservation', function () {
    return view('reservation');
});

//Testimonial
Route::get('testimonial', function () {
    return view('testimonial');
});

//Contact Us
Route::get('contact', function () {
    return view('contactus');
});
