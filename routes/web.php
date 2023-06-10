<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('dashboard')->middleware('login');

// FILES START
Route::get('/files', [FilesController::class,'getFiles'])->name('files');
Route::get('/files/upload', function(){
    return view('upload');
})->name('files.upload');
Route::get('/files/pdf', [FilesController::class,'get_pdf'])->name('pdf');
Route::get('/files/doc', [FilesController::class,'get_doc'])->name('doc');
Route::get('/files/ppt', [FilesController::class,'get_ppt'])->name('ppt');
Route::post('/files/upload', [FilesController::class,'fileUpload'])->name('upload');
Route::get('/files/edit/{id}', [FilesController::class,'fileEdit'])->name('edit');
Route::get('/files/delete/{id}', [FilesController::class,'fileDelete'])->name('delete');

//FILES END
Route::get('/trash', function () {
    return view('trash');
})->name('trash');


//Login

Route::get('/login',function(){
    if(Auth::user()){
          return redirect('/');
    }
    return view('login');
});
Route::post('/login/auth',[Filescontroller::class,'login']);

Route::get('/logout', function(){
    Auth::logout();
    return   redirect('/login');
})->name('login');