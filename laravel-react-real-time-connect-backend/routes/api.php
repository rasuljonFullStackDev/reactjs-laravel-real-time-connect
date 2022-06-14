<?php

use App\Events\FormSubmit;
use App\Http\Controllers\chatController;
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
Route::post('/test',function(){
    $massage = request()->massage;
    event(new FormSubmit($massage));
});
Route::post('/chat',[chatController::class,'chat']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
