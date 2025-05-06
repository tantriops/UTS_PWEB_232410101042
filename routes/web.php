<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
// ---------- login ---------
Route::get('/', function () {
    return view('login');
});


Route::get('login', function () {
    return view('login');
})->name('login');


Route::post('login',[PageController::class,'login'])->name('login.ceking');


// ----------------- Dashboard -----------------
Route::get('dashboard', function () {
    $user = session('user');
    return view('dashboard', compact('user'));
})->name('dashboard');


// ----------------- Profile -----------------

Route::get('profile', function () {
    $user = session('user');
    return view('profile', compact('user'));
})->name('profile');


// ----------------- Pengelolaan -----------------

Route::get('pengelolaan',[PageController::class,'color'])->name('pengelolaan');