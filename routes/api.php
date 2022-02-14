<?php

use App\Http\Controllers\API\CommentController;
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

Route::resource('comments', CommentController::class)->only([
    'index', 'show'
]);

Route::resource('comments', CommentController::class)->only([
    'store', 'update', 'destroy'
])->middleware(['auth0.authorize']);
