<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/province', [ApiController::class , 'province']);
Route::get('/county', [ApiController::class , 'county']);
Route::get('/district', [ApiController::class , 'district']);
Route::get('/street', [ApiController::class , 'street']);