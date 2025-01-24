<?php

use App\Http\Controllers\CandyBarController;
use Illuminate\Support\Facades\Route;

Route::resource('candybars', CandyBarController::class);
