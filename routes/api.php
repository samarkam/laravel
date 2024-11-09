<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ScategorieController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/categories', [CategoryController::class,'index']);
Route::post('/categories', [CategoryController::class,'store']);
Route::delete('/categories/{id}', [CategoryController::class,'destroy']);
Route::get('/categories/{id}', [CategoryController::class,'show']);
Route::put("/categories/{id}",[CategoryController::class,"update"]);


Route::get('/scat', [ScategorieController::class,'index']);
Route::post('/scat', [ScategorieController::class,'store']);
Route::delete('/scat/{id}', [ScategorieController::class,'destroy']);
Route::get('/scat/{id}', [ScategorieController::class,'show']);
Route::put("/scat/{id}",[ScategorieController::class,"update"]);
Route::get('/scat/{idcat}', [ScategorieController::class,'showSCategorieByCAT']);

Route::get('/articles', [ArticleController::class,'index']);
Route::post('/articles', [ArticleController::class,'store']);
Route::delete('/articles/{id}', [ArticleController::class,'destroy']);
Route::get('/articles/{id}', [ArticleController::class,'show']);
Route::put("/articles/{id}",[ArticleController::class,"update"]);
