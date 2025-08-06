<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';



Route::get('/addstudent', [StudentsController::class, 'createStudentPage'])->name('createStudentPage');
Route::get('/showallstudents', [StudentsController::class, 'showAllStudents'])->name('showallstudents');
Route::get('/getstdid/{id}', [StudentsController::class, 'getStudentId'])->name('getstdid');
Route::post('/updatestudent', [StudentsController::class, 'updateStudent'])->name('updateStudent');
Route::post('/storestudent', [StudentsController::class, 'storeStudent'])->name('storeStudent');
Route::get('/deletestd/{id}', [StudentsController::class, 'deleteStudent'])->name('deletestd');
//teacher


Route::get('/addteacher', [TeachersController::class, 'addteacher'])->name('addteacher');
Route::get('/teacher', [TeachersController::class, 'teacher'])->name('teacher');
Route::post('/storeteacher', [TeachersController::class, 'storeteacher'])->name('storeteacher');
Route::get('/getteacherid/{id}', [TeachersController::class, 'getteacherid'])->name('getteacherid');
Route::post('/editteacher', [TeachersController::class, 'editteacher'])->name('editteacher');
Route::get('/deleteteacher/{id}', [TeachersController::class, 'deleteteacher'])->name('deleteteacher');
Route::get('/getteacher/{id}', [TeachersController::class, 'getteacher'])->name('getteacher');
 //storeteacher,/shows/teacher,getteacherid,editteacher,deleteteacher
 //storeteacher,show/teacher,editteacher,getteacherid{id},deleteteacher