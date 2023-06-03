<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\MrpPostController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\PersetujuanController;
use App\Http\Controllers\Api\UserMrpPostsController;
use App\Http\Controllers\Api\UserPersetujuansController;

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

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    })
    ->name('api.user');

Route::name('api.')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('roles', RoleController::class);
        Route::apiResource('permissions', PermissionController::class);

        Route::apiResource('users', UserController::class);

        // User Mrp Posts
        Route::get('/users/{user}/mrp-posts', [
            UserMrpPostsController::class,
            'index',
        ])->name('users.mrp-posts.index');
        Route::post('/users/{user}/mrp-posts', [
            UserMrpPostsController::class,
            'store',
        ])->name('users.mrp-posts.store');

        // User Persetujuans
        Route::get('/users/{user}/persetujuans', [
            UserPersetujuansController::class,
            'index',
        ])->name('users.persetujuans.index');
        Route::post('/users/{user}/persetujuans', [
            UserPersetujuansController::class,
            'store',
        ])->name('users.persetujuans.store');

        Route::apiResource('mrp-posts', MrpPostController::class);

        Route::apiResource('persetujuans', PersetujuanController::class);
    });
