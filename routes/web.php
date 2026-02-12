<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/newad', function () {
    $ads = session()->get('ads', []);
    return view('ads', [
        'ads' => $ads,
    ]);
});

Route::post('/newad', function () {
    $ad = request('ad');

    session()->push('ads', $ad);

    return redirect('/home');
});

Route::get('/delete', function () {
    session()->forget('ads');
    return redirect('/home');
});
