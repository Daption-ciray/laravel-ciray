<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\namecontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/hello", function () {
    return "Hello World";
});
Route::get("/hello/{name}", function ($name) {
    return "Hello " . $name;
});
Route::get("/viewlike", function () {
    return view("viewlike");
});
Route::get("/name", [namecontroller::class, "index"]);
Route::get("/name/{name}", [namecontroller::class, "show"]);


