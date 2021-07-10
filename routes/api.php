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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\MainController;
Route::get('/', [MainController::class, 'home']);

use App\Http\Controllers\ItemController;
use App\Models\Item;
// Route::get('/item/all', [ItemController::class, 'get_all']);
Route::get('/item/all', function () {
    return response(Item::all(),200);
});

Route::get('/item/new', [ItemController::class, 'create']);
Route::get('/item/{id}', [ItemController::class, 'item']);
Route::put('/item/{id}', [ItemController::class, 'edit']);
Route::delete('/item/{id}', [ItemController::class, 'delete']);
Route::get('/search/{string}', [ItemController::class, 'search']);

use App\Http\Controllers\AuthController;
Route::get('/login', [AuthController::class, 'login']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/auth/register', [AuthController::class, 'make_register']);