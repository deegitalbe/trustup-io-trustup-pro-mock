<?php

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

use App\Http\Controllers\UpdateController;
use Deegitalbe\ServerAuthorization\Http\Middleware\AuthorizedServer;
use Illuminate\Support\Facades\Route;

Route::middleware(AuthorizedServer::class)->get('changelog/index/updates/invalidate-cache' , [UpdateController::class, 'invalidCache']);
