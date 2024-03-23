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



Route::group([
    'middleware' => ['auth'],
    'as' => 'dashboard.', // dashboard. هتبدأ ب routes name كل اسماء
    'prefix' => 'dashboard',
], function () {
    Route::get('/', [DashboardController::class, "index"])
        ->name('dashboard');

    /*
     بتكريت لي 7 راواتس resource
        index
        create
        store
        show
        edit
        update
        destroy
    */
    Route::resource('/categories', CategoriesController::class);
});
