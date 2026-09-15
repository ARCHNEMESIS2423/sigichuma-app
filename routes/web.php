<?php

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

// middlewares found here auth, verified\

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/locale', [LocaleController::class, 'update'])->name('locale.update');

// ================ TESTING DATABASE CONNECTION =====================
use Illuminate\Support\Facades\DB;

Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        
        // This grabs the current database name you are connected to
        $dbName = DB::select("SELECT current_database();")[0]->current_database;
        
        return response()->json([
            'status' => 'Success',
            'message' => 'Successfully connected to Supabase Postgres!',
            'database' => $dbName
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'Error',
            'message' => 'Could not connect to the database.',
            'error' => $e->getMessage()
        ], 500);
    }
});


// ==================================================================
//================  MANUAL MIGRATION TEST ===========================
use Illuminate\Support\Facades\Artisan;

Route::get('/run-migrations', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return response()->json([
            'status' => 'Success',
            'output' => Artisan::output()
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'Error',
            'message' => $e->getMessage()
        ], 500);
    }
});
//==================================================================

require __DIR__.'/settings.php';
