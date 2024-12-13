<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sitecontroller;

Route::get('/', [Sitecontroller::class, 'index']);


