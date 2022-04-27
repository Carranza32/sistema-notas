<?php

use App\Exports\ScoreExport;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('export-student/{id}', function ($id) {
    return Excel::download(new ScoreExport($id), 'notas.xlsx');
});
//test

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return User::where('id', $request->user()->id)->with('roles')->get();
    });

    Route::get('/logout', [AuthController::class, 'logout']);

    Route::controller(SubjectController::class)->prefix('subjects')->group(function(){
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::get('/{id}', 'show');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    });

    Route::controller(GradeController::class)->prefix('grades')->group(function(){
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::get('/{id}', 'show');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    });

    Route::controller(StudentController::class)->prefix('students')->group(function(){
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::get('/find/{id}', 'show');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');

        Route::get('/subjects', 'mySubjects');
        Route::get('/subjects/{id}', 'getSubject');

        Route::get('/scores/{student_id}', 'getStudentScore');
    });

    Route::controller(SubjectController::class)->prefix('subjects')->group(function(){
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::get('/{id}', 'show');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    });

    Route::controller(ScoreController::class)->prefix('scores')->group(function(){
        Route::put('/{id}', 'update');
    });

    Route::controller(TeacherController::class)->prefix('teachers')->group(function(){
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::get('find/{id}', 'show');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');

        Route::get('groups', 'myGroups');
    });

    Route::controller(GroupController::class)->prefix('groups')->group(function(){
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::get('find/{id}', 'show');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    });

});
