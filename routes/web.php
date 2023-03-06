<?php

use Illuminate\Support\Facades\Route;

// ----------------

Route::view('/', 'index')->name('home');

Route::view('el-colegio', 'site.colegio')->name('colegio');

Route::view('farmacias-de-turno', 'site.turno')->name('turno');