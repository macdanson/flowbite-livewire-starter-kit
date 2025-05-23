<?php

use App\Livewire\Settings\Profile;
use App\Livewire\Settings\UpdatePassword;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::view('/dashboard', 'home')->name('dashboard');


    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', UpdatePassword::class)->name('settings.password');
});

require __DIR__.'/auth.php';
