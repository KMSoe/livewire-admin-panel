<?php

use App\Livewire\Admin\AboutUs;
use Illuminate\Support\Facades\Route;



Route::name('admin.')->group(function() {
    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');

    Route::get('/about-us', AboutUs::class)->name('about-us');
});