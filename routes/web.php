<?php

use App\Http\Controllers\bookController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

});

require __DIR__.'/auth.php';

/*Route::group(['middleware' => 'auth:admin'], function() {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth'])->name('admin.dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');

});*/

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

//Upload Task
Route::get('upload', 'App\Http\Controllers\FileUploadController@index');
Route::post('upload', 'App\Http\Controllers\FileUploadController@upload')->name('upload');

//Route::resource('book', bookController::class);

// Book
Route::get('/createbook', ['uses'=>'App\Http\Controllers\bookController@create','as'=>'create.book']);

Route::get('/viewbook', ['uses'=>'App\Http\Controllers\bookController@index','as' => 'view.book']);

Route::get('/storebook', ['uses'=>'App\Http\Controllers\bookController@store','as'=>'store.book']);

// Book Issue
Route::get('/createissue/{id}',['uses'=>'App\Http\Controllers\issueController@create','as'=>'issue.book']);

Route::post('/storeissue_book',['uses'=>'App\Http\Controllers\issueController@store','as'=>'storeissue.book']);

Route::get('/viewissue', ['uses'=>'App\Http\Controllers\issueController@index','as'=>'viewissue.book']);

Route::get('/returned/{id}', ['uses'=>'App\Http\Controllers\issueController@checked','as' => 'return.book']);

Route::get('/sendmsg', ['uses'=>'App\Http\Controllers\issueController@send','as' => 'send.msg']);

// Student Router
Route::get('/createstudent',['uses' =>  'App\Http\Controllers\studentController@create','as' => 'create.student']);

Route::get('/viewstudent', ['uses'=>'App\Http\Controllers\studentController@index','as'=>'view.student']);

Route::post('/storestudent', ['uses'=>'App\Http\Controllers\studentController@store','as' => 'store.student']);



