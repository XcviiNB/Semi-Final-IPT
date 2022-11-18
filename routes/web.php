<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/inventories',[InventoryController::class, 'index']);

Route::get('/inventories/add',[InventoryController::class, 'add']);
Route::post('/inventories', [InventoryController::class, 'store']);

Route::get('/edit-inv/{inventories}',[InventoryController::class, 'edit']);
Route::put('/edit-inv/{inventories}',[InventoryController::class, 'update']);

Route::get('/remove-inv/{inventories}',[InventoryController::class, 'remove']);
Route::delete('/confirmremoval-inv/{inventories}', [InventoryController::class, 'destroy']);


