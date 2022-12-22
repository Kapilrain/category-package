<?php

use Kapilrain\Category\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function(){
    Route::resource('category',CategoryController::class);
});
// Route::middleware('web')->get('category', CategoryController::class);
