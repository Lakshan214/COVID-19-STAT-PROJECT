<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CovidDataController;
use App\Http\Controllers\HelpGuideController;

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

Auth::routes();


Route::get('/', [CovidDataController::class, 'index']);
Route::get('/help-guides', [HelpGuideController::class, 'index'])->name('help-guides.index');
Route::middleware('auth')->group(function () {
    Route::get('/help-guides/create', [HelpGuideController::class, 'create']);
    Route::post('/help-guides', [HelpGuideController::class, 'store']);
});



