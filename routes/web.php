<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| SPA Catch-All Route
|--------------------------------------------------------------------------
|
| All public-facing routes are handled by the React SPA.
| Filament admin (/admin) and API routes (/api, /sanctum) are excluded.
| The old Blade routes for '/' and '/ticket' are replaced by this.
|
*/

Route::get('/{any?}', function () {
    return view('spa');
})->where('any', '^(?!admin|api|sanctum|livewire).*$')->name('spa');
