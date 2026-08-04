<?php

use App\Http\Controllers\Api\ArtistSubmissionController;
use App\Http\Controllers\Api\PageController;
use App\Http\Controllers\Api\SeoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*
|--------------------------------------------------------------------------
| Public API Routes
|--------------------------------------------------------------------------
|
| These routes serve JSON data to the React SPA frontend.
| No authentication required for public page content.
|
*/

Route::prefix('pages')->group(function () {
    Route::get('/home', [PageController::class, 'home']);
    Route::get('/ticket', [PageController::class, 'ticket']);
});

Route::post('/artist-submissions', [ArtistSubmissionController::class, 'store']);

Route::get('/seo/{page}', [SeoController::class, 'show']);
