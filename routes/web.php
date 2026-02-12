<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('start');
});

Route::get('/home', function () {
    $ads = session()->get('ads', ['None exist']);
    return view('homepage', [
        'ads' => $ads,
    ]);
});

Route::post('/newad', function () {
    $ad = request('ad');

    session()->push('ads', $ad);
    //dd(session('ads'));

    return redirect('/home');
});

Route::get('/delete', function () {
    session()->forget('ads');
    return redirect('/home');
});
