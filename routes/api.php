<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 */

Route::controller(AuthController::class)->group(function () {
    Route::post('signin', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

// Route::apiResource('articles', ArticleController::class);
Route::controller(ArticleController::class)->group(function () {
    Route::get('articles/{id}', 'show');
    Route::get('articles', 'index');
    Route::post('articles/add', 'store');
    Route::put('articles/edit{id}', 'update');
    Route::post('articles/delete', 'destroy');
});

// Route::controller(CommentController::class)->group(function () {
//     Route::get('comments', 'index');
//     Route::post('comments', 'store');
//     Route::get('comments/{comment}', 'show');
//     // Route::put('comments/{comment}', 'update');
//     Route::delete('comments/{comment}', 'destroy');
//     // Route::get('comments/article/{comment}', 'showComments');
// })->middleware('auth:api');
