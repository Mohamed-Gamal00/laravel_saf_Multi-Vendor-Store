<?php

use App\Http\Controllers\Dashboard\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


/*

هنا انا بقسم الراوتس عندي في ملف لواحده خاص بالداشبورد
بالشكل ده web.php وبروح استدعيها في ملف ال
require __DIR__.'/dashboard.php';
عشان الراتس تسمع في الملف الاصلي واقدر اشوفها

*/

Route::get('/dashboard', [DashboardController::class, "index"])
->middleware(['auth', 'verified'])
->name('dashboard');

Route::resource('dashboard/categories',CategoriesController::class);
