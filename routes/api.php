<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AnnualLeaveController;
use App\Http\Controllers\RequestLeaveController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile',[AuthController::class, 'profile']);

    Route::prefix('employee')->group(function (){
        Route::get('/', [EmployeeController::class, 'index']);
        Route::post('/create', [EmployeeController::class, 'createEmployee']);
        Route::delete('/delete/{id}', [EmployeeController::class, 'deleteEmployee']);
        Route::post('/update/{id}', [EmployeeController::class, 'updateEmployee']);
        Route::get('/view/{id}', [EmployeeController::class, 'getEmployeeById']);
    });

    Route::prefix('position')->group(function (){
        Route::get('/', [PositionController::class, 'viewPosition']);
        Route::post('/create', [PositionController::class, 'createPosition']);
        Route::delete('/delete/{id}', [PositionController::class, 'deletePosition']);
        Route::post('/update/{id}', [PositionController::class, 'updatePosition']);
        Route::get('/view/{id}', [PositionController::class, 'getPositionById']);
    });

    Route::prefix('user')->group(function (){
        Route::get('/', [UserController::class, 'viewUser']);
        Route::post('/create', [UserController::class, 'createUser']);
        Route::delete('/delete/{id}', [UserController::class, 'deleteUser']);
        Route::post('/update/{id}', [UserController::class, 'updateUser']);
        Route::get('/view/{id}', [UserController::class, 'getUserById']);
    });

    Route::prefix('role')->group(function (){
        Route::get('/', [RoleController::class, 'viewRole']);
        Route::post('/create', [RoleController::class, 'createRole']);
        Route::delete('/delete/{id}', [RoleController::class, 'deleteRole']);
        Route::post('/update/{id}', [RoleController::class, 'updateRole']);
        Route::get('/view/{id}', [RoleController::class, 'getRoleById']);
    });

    Route::prefix('annualleave')->group(function (){
        Route::get('/', [AnnualLeaveController::class, 'viewAnnualLeave']);
        Route::post('/create', [AnnualLeaveController::class, 'createAnnualLeave']);
        Route::delete('/delete/{id}', [AnnualLeaveController::class, 'deleteAnnualLeave']);
        Route::post('/update/{id}', [AnnualLeaveController::class, 'updateAnnualLeave']);
        Route::get('/view/{id}', [AnnualLeaveController::class, 'getAnnualLeaveById']);
    });

    Route::prefix('requestleave')->group(function (){
        Route::get('/', [RequestLeaveController::class, 'viewRequestLeave']);
        Route::post('/create', [RequestLeaveController::class, 'createRequestLeave']);
        Route::delete('/delete/{id}', [RequestLeaveController::class, 'deleteRequestLeave']);
        Route::post('/update/{id}', [RequestLeaveController::class, 'updateRequestLeave']);
        Route::get('/view/{id}', [RequestLeaveController::class, 'getRequestLeaveById']);
    });

    Route::prefix('list')->group(function (){
        Route::get('/position', [PositionController::class, 'listPosition']);
    });
});

