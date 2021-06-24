<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use MarkSitko\LaravelUnsplash\Unsplash;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('unsplash', function () {
    return Unsplash::search()
        ->term('buildings')
        ->color('black_and_white')
        ->orientation('squarish')
        ->toJson();
});

Route::get('test', function () {
    return response()->json([
        'foo' => 'bar'
    ]);
});
