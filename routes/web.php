<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\customer\CustomerController;


Route::get('/', [CustomerController::class, "landing_page"])->name("customer.landing_page");
Route::get('/products', [CustomerController::class, "products"])->name("customer.products");
Route::get("/products/{id}", [CustomerController::class, "detail_product"])->name("customer.detail_product");
Route::get('/search', [CustomerController::class, "search"])->name("customer.search");

Route::prefix("auth")->group(function() {
    Route::get("/login", [AuthController::class, "login"])->name("login");
    Route::get("/register", [AuthController::class, "register"])->name("register");
    Route::post("/storeLogin", [AuthController::class, "storeLogin"])->name("login.store");
    Route::post("/storeRegister", [AuthController::class, "storeRegister"])->name("register.store");
    Route::get("/logout", [AuthController::class, "logout"])->name("logout")->middleware("auth");
});

Route::prefix("dashboard")->group(function() {
    Route::middleware(['auth', "admin"])->group(function () {
        Route::get("/", [DashboardController::class, "dashboard"])->name("dashboard");

        Route::resource('products', ProductController::class);

        Route::resource("categories", CategorieController::class);

        Route::get("/transactions", [TransactionController::class, "index"])->name("transactions.index");
        Route::get("/transactions/{id}", [TransactionController::class, "detail"])->name("transactions.detail");

        Route::get("/users", [UserController::class, "index"])->name("users.index");
    });
});

Route::middleware(['auth', 'customer'])->group(function () {
    Route::post("/carts/{id}/add", [CartController::class, "add"])->name("customer.carts.add");
    Route::get("/carts/clear", [CartController::class, "clear"])->name("customer.carts.clear");
    Route::get('/carts', [CustomerController::class, "carts"])->name("customer.carts");
    Route::post("/carts/checkout", [CartController::class, "checkout"])->name("customer.carts.checkout");
    Route::get("/carts/summary", [CartController::class, "summary"])->name("customer.carts.summary");
});;