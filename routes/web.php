<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\usercontroller;

// Route::get('/', function () {
//     return view('tugas1');
// });

// Route::get('tugas2', function () {
//     return view('tugas2');
// });

// Route::get('tugas3', function () {
//     return view('tugas3');
// });

Route::get('/index', function () {
    return view('index');
});


route::get("/tem/master", [usercontroller::class, "master"]);
route::get("/t1", [usercontroller::class, "tugas1"]);
route::get("/t2", [usercontroller::class, "tugas2"]);
route::get("/t3", [usercontroller::class, "tugas3"]);