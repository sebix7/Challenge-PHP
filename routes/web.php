<?php

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
Route::get("/", "HomeController@index")->name("home");
Route::get("posts", "PostController@index")->name("post.index");
Route::get("posts/crear", "PostController@create")->name("post.create");
Route::post("posts", "PostController@store")->name("post.store");
Route::get("posts/{id}", "PostController@show")->name("post.show");
Route::get("posts/{id}/editar", "PostController@edit")->name("post.edit");
Route::patch("/posts/{id}", "PostController@update")->name("post.update");