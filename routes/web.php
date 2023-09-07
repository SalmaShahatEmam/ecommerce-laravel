<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\models\category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Models\Test;
use Symfony\Component\HttpFoundation\Request;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

Route::get('/loginmanual' , [loginController::class , 'login']);
Route::get('registermanual', [registerController::class , 'register']);

Route::fallback(function() {
    return 'Hm, why did you land here somehow?';
});

require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';

