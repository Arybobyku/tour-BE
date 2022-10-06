<?php

use App\Http\Controllers\API\AspectController;
use App\Http\Controllers\API\KabupatenController;
use App\Models\Kabupaten;
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


//Kabupaten
Route::post('kabupaten',[KabupatenController::class,'add']);
Route::get('kabupaten',[KabupatenController::class,'all']);

//Aspect
Route::post('aspect',[AspectController::class,'add']);
Route::get('aspect',[AspectController::class,'all']);