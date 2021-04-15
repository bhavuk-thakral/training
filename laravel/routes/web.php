<?php

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/welcome', function () {
    return Inertia::render('ourwelcome');
})->name('welcome');


Route::get('/bhavuk', function () {
    return Inertia::render('Dashboard');
    return "Hello";
})->name('bhavuk');

//Route::get('/task', function () {
    //return Inertia::render('Task');
//})->name('task');

Route::get('/project', function () {
    return Inertia::render('Project');
})->name('project');


Route::resource(name:'task',controller\app\http\controllers\Taskcontroller::class);

//Route::get('/welcome', function () {
    //return Inertia::render('Dashboard');
    //$welcome ="Hello ,world";
   // return compact("welcome");
    //return ("welcome");
    //return view ("welcome",compact("welcome"));
//})->name('bhavuk');

});