<?php

use App\Livewire\CarList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Cars', CarList::class);
