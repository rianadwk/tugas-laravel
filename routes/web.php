<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    usercontroller,
    GenreController,
    CastController,
};
use PhpParser\Node\Expr\Cast;

// Route::get('/', function () {
//     return view('tugas1');
// });

// Route::get('tugas2', function () {
//     return view('tugas2');
// });

// Route::get('tugas3', function () {
//     return view('tugas3');
// });

//Route::get('/index', function () {
  //  return view('index');
// });


route::get("/tem/master", [usercontroller::class, "master"]);
route::get("/t1", [usercontroller::class, "tugas1"]);
route::get("/t2", [usercontroller::class, "tugas2"]);
route::get("/t3", [usercontroller::class, "tugas3"]);
route::get("/index", [usercontroller::class, "index"]);

// genre
route::get("/genre/create", [GenreController::class,'create'])->name('genre.create');
route::post('/genre', [GenreController::class, 'store'])->name('genre.store');
route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->name('genre.edit');
route::put('/genre{id}', [GenreController::class, 'update'])->name('genre.update');
route::get('/genre{id}', [GenreController::class, 'show'])->name('genre.show');
route::delete('/genre{id}', [GenreController::class, 'destroy'])->name('genre.delete');

//cast
route::get("/cast", [CastController::class,'index'])->name('cast.index');
route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
route::post('/cast', [CastController::class, 'store'])->name('cast.store');
route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('cast.edit');
route::put('/cast{id}', [CastController::class, 'update'])->name('cast.update');
route::delete('/cast{id}', [CastController::class, 'destroy'])->name('cast.delete');