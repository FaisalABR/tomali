<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "index"]);
Route::get('/home', [HomeController::class, "redirect"]);




Route::get("/orders", [OrderController::class, "index"]);

Route::get("/menu",[MenuController::class, "index"]);
Route::get("/menu/{idMenu}",[MenuController::class, "show_menu"]);
Route::post("/addToCart", [MenuController::class, "add_to_cart"])->name('add.to.cart');
Route::delete("/removeCart",[OrderController::class, "remove_cart"])->name('remove.cart');
Route::post("/confirm",[OrderController::class, "confirm_order"])->name('confirm.order');

Route::get("/add_menu_view", [AdminController::class, "add_menu_view"]);
Route::post("/upload_menu", [AdminController::class, "upload"]);
Route::get("/menu_view", [AdminController::class, "menu_view"]);
Route::delete("/delete_menu", [AdminController::class, "delete_menu"])->name('delete.menu');
Route::get("/order_view", [AdminController::class, "order_view"]);
Route::post("/accept_order",[AdminController::class, "accept_order"])->name("accept.order");
Route::post("/end_order",[AdminController::class, "end_order"])->name("end.order");
Route::delete("/delete_order",[AdminController::class, "delete_order"])->name("delete.order");

Route::get('/reports', [ReportsController::class, "index"]);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
