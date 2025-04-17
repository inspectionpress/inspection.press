<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InspectionController;

Route::prefix('inspections')->group(function () {
    Route::get('/{uuid}', [InspectionController::class, 'showPublic']);
    Route::post('/', [InspectionController::class, 'store']);
});
