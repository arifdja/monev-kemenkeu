<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PartiSatkerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware(['api'])->group(function() {
    Route::get('/getaccount', [AuthController::class, 'getaccount']);
    Route::get('/partisatker', [PartiSatkerController::class, 'index']);
    Route::post('/getNKA', [PartiSatkerController::class, 'getNKA']);
});

Route::any('{any}', function(){
    return response()->json([
    	'status' => 'error',
        'message' => 'Resource not found'], 404);
})->where('any', '.*');


