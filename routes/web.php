<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', [IndexController::class, 'index'])->name('home');
// Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/topic/{topic}', [TopicController::class, 'show'])->name('topics.show');
Route::post('/send_mail', [SendMailController::class, 'send'])->name('send_mail');

Route::middleware(['auth', 'admin'])
    ->prefix('dashboard')
    ->group(function () {
        Route::resources([
            '/topics' => TopicController::class,
            '/users' => UserController::class,
        ]);
    });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
