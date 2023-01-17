<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('Schooling','SchoolingController',['except'=>['create']]);
Route::resource('BloodType','BloodTypeController',['except'=>['create']]);
Route::resource('Conventions','ConventionsController',['except'=>['create']]);
Route::resource('DocumentType','DocumentTypeController',['except'=>['create']]);
Route::resource('ExaminationStatus','ExaminationStatusController',['except'=>['create']]);
Route::resource('MaritalStatus','MaritalStatusController',['except'=>['create']]);