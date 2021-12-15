<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Laravel8から使うコントローラーのuseが必要
use App\Http\Controllers\BookController;

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

// Laravel8から書き方が変更された
// apiに対応したrestful(教P.290)にしておく
Route::apiResource('/books',BookController::class);