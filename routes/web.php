<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

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
    return view('welcome');
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('profile', [ProfileController::class, 'index'])->name('profile');

Route::resource('employees', EmployeeController::class);

Auth::routes();

// Storage routes
Route::get('/local-disk', function() {
    Storage::disk('local')->put('local-example.txt', 'This is local example content');
    return asset('storage/local-example.txt');
});

Route::get('/public-disk', function() {
    Storage::disk('public')->put('public-example.txt', 'This is public example content');
    return asset('storage/public-example.txt');
});

Route::get('/retrieve-local-file', function() {
    $contents = Storage::disk('local')->exists('local-example.txt')
                ? Storage::disk('local')->get('local-example.txt')
                : 'File does not exist';
    return $contents;
});

Route::get('/retrieve-public-file', function() {
    $contents = Storage::disk('public')->exists('public-example.txt')
                ? Storage::disk('public')->get('public-example.txt')
                : 'File does not exist';
    return $contents;
});

Route::get('/download-local-file', function() {
    return Storage::download('local-example.txt', 'local file');
});

Route::get('/download-public-file', function() {
    return Storage::download('public/public-example.txt', 'public file');
});

Route::get('/file-url', function() {
    return Storage::url('local-example.txt');
});

Route::get('/file-size', function() {
    return Storage::size('local-example.txt');
});

Route::get('/file-path', function() {
    return Storage::path('local-example.txt');
});

// File upload example
Route::get('/upload-example', function() {
    return view('upload_example');
});

Route::post('/upload-example', function(Request $request) {
    $path = $request->file('avatar')->store('public');
    return $path;
})->name('upload-example');

// File delete routes
Route::get('/delete-local-file', function(Request $request) {
    Storage::disk('local')->delete('local-example.txt');
    return 'Deleted';
});

Route::get('/delete-public-file', function(Request $request) {
    Storage::disk('public')->delete('public-example.txt');
    return 'Deleted';
});

// Download file route
Route::get('download-file/{employeeId}', [EmployeeController::class, 'downloadFile'])->name('employees.downloadFile');

// Get employee data route
Route::get('getEmployees', [EmployeeController::class, 'getData'])->name('employees.getData');

// Export to Excel route
Route::get('exportExcel', [EmployeeController::class, 'exportExcel'])->name('employees.exportExcel');

Route::get('exportPdf', [EmployeeController::class, 'exportPdf'])->name('employees.exportPdf');



