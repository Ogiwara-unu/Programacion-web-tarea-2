<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('contact');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {

    $validated = $request->validate([
        'name' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
        'phone' => ['required', 'regex:/^[0-9]{8,15}$/'],
        'address' => ['required', 'min:5'],
        'email' => ['required', 'email'],
        'status' => ['required']
    ]);

    session($validated);

    return redirect('/result');
});

Route::get('/result', function () {
    return view('result');
});
