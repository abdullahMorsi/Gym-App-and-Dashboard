<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DietaryController;
use App\Http\Controllers\NutritionController;
use App\Http\Controllers\PredictionController;
use App\Models\Book;
use App\Models\Dietary;
use App\Models\Exercise;
use App\Models\nutrition;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

//Progress System
Route::post('/prediction', [PredictionController::class, 'predict'])->name('prediction.predict');

// Admin Dashboard

//Login
Route::get('/admin/login', [AdminController::class, 'create'])->name('adminLogin');
Route::Post('/admin/login', [AdminController::class, 'store']);
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('logout')->middleware('admin.auth');


Route::middleware('admin.auth')->group(function () {
    // Admin Main Page
    Route::get('/admin', function () {
        $exercises = Exercise::all();
        $books = Book::all();
        $dietary = Dietary::all();
        $nutritions = Nutrition::all();
        return view('admin.index',["exercises"=>$exercises, "books"=>$books, "dietary"=>$dietary, "nutritions"=>$nutritions]);
    });


//Admin Nutrition
Route::resource('/admin/nutrition', NutritionController::class);

//Admin Dietary
Route::resource('/admin/dietary', DietaryController::class);
Route::resource('/admin/exercise', ExerciseController::class);
Route::resource('/admin/book', BookController::class);
//switcher
Route::get('/admin/switcher', function () {
    return view('admin.switcher-1');
});
});
// User Website

//Main Pages
Route::get('/', function () {return view('home');});
Route::get('/home', function () {return view('home');});

//nutrition
Route::get('nutrition', [NutritionController::class, 'indexFront']);
//Exercise
Route::get('/exercises', function () {
    return view('exercises');
});
Route::get('/exercises/leg', [ExerciseController::class, 'leg'])->name('exercises.leg');
Route::get('/exercises/chest', [ExerciseController::class, 'chest'])->name('exercises.chest');
Route::get('/exercises/hand', [ExerciseController::class, 'hand'])->name('exercises.hand');
Route::get('/exercises/back', [ExerciseController::class, 'back'])->name('exercises.back');
Route::get('/exercises/stomach', [ExerciseController::class, 'stomach'])->name('exercises.abs');
Route::get('/exercises/shoulder', [ExerciseController::class, 'shoulder'])->name('exercises.shoulders');

//diet
Route::get('/dietary', [DietaryController::class, 'indexFront']);

//books
Route::get('books', [BookController::class, 'indexFront']);

Route::middleware(['auth'])->group(function (){
    Route::get('/progress-system', function () {
        return view('progress-system');
    });

});

//registration system
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::Post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::Post('login', [LoginController::class, 'store']);
Route::get('logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');
