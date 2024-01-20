<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('Stolarski/310807/people',[MainController::class, 'index']);
Route::post('Stolarski/310807/people',[MainController::class, 'store']);
Route::get('Stolarski/310807/people/{id}',[MainController::class, 'show']);
Route::put('Stolarski/310807/people/{id}/edit',[MainController::class, 'update']);
Route::delete('Stolarski/310807/people/{id}/delete',[MainController::class, 'destroy']);