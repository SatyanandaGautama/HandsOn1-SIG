<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapsController;  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingPage');
});
Route::get('/HandsOn1', [MapsController::class, 'ShowMapsTugas1']); 
Route::get('/Latihan1', [MapsController::class, 'ShowMapsLatihan1']); 