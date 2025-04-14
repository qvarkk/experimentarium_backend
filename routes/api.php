<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\\Http\\Controllers\\Api')->group(function () {
    Route::namespace('Tag')->group(function () {
       Route::get('/tags', IndexController::class)->name('api.tag.index');
       Route::get('/tags/{tag}', ShowController::class)->name('api.tag.show');
       Route::post('/tags', StoreController::class)->name('api.tag.store');
       Route::patch('/tags/{tag}', UpdateController::class)->name('api.tag.update');
       Route::delete('/tags/{tag}', DestroyController::class)->name('api.tag.destroy');
    });

    Route::namespace('Equipment')->group(function () {
        Route::get('/equipment', IndexController::class)->name('api.equipment.index');
        Route::get('/equipment/{equipment}', ShowController::class)->name('api.equipment.show');
        Route::post('/equipment', StoreController::class)->name('api.equipment.store');
        Route::patch('/equipment/{equipment}', UpdateController::class)->name('api.equipment.update');
        Route::delete('/equipment/{equipment}', DestroyController::class)->name('api.equipment.destroy');
    });

    Route::namespace('Reagent')->group(function () {
        Route::get('/reagents', IndexController::class)->name('api.reagent.index');
        Route::get('/reagents/{reagent}', ShowController::class)->name('api.reagent.show');
        Route::post('/reagents', StoreController::class)->name('api.reagent.store');
        Route::patch('/reagents/{reagent}', UpdateController::class)->name('api.reagent.update');
        Route::delete('/reagents/{reagent}', DestroyController::class)->name('api.reagent.destroy');
    });

    Route::namespace('Lab')->group(function () {
        Route::get('/labs', IndexController::class)->name('api.lab.index');
        Route::get('/labs/{lab}', ShowController::class)->name('api.lab.show');
        Route::post('/labs', StoreController::class)->name('api.lab.store');
        Route::patch('/labs/{lab}', UpdateController::class)->name('api.lab.update');
        Route::delete('/labs/{lab}', DestroyController::class)->name('api.lab.destroy');
    });
});
