<?php

use App\Http\Controllers\ScratchbookController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('dashboard')->group(function (){

        Route::prefix('scratchbooks')->group(function (){
            Route::get('new', [ScratchbookController::class, 'create'])->name('scratchbook.create');
        });

    });

});
Route::get('@{team:username}/{slug}', [ScratchbookController::class, 'show_public'])->name('scratchbook.show');
Route::get('@{team:username}/{slug}/raw', [ScratchbookController::class, 'show_public_raw'])->name('scratchbook.show_raw');

