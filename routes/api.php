<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyDareController;
use App\Http\Controllers\RateController;

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

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
	Route::post('login', [AuthController::class, 'login']);
	Route::post('logout', [AuthController::class, 'logout']);
	Route::post('refresh', [AuthController::class, 'refresh']);
	Route::post('me', [AuthController::class, 'me']);
	Route::post('register', [AuthController::class, 'register']);
});

Route::group(['middleware' => 'api', 'prefix' => 'game'], function() {
	Route::get('dares', [GameController::class, 'getDares']);
	Route::get('questions', [GameController::class, 'getQuestions']);
	Route::get('dices', [GameController::class, 'getDices']);
	Route::get('soft-dares', [GameController::class, 'getSoftDares']);
	Route::get('soft-questions', [GameController::class, 'getSoftQuestions']);
	Route::get('hot-dares', [GameController::class, 'getHotDares']);
	Route::get('hot-questions', [GameController::class, 'getHotQuestions']);
	Route::get('couple-soft', [GameController::class, 'getCoupleSoft']);
});

Route::apiResource('my-dare', MyDareController::class);

Route::group(['middleware' => 'api', 'prefix' => 'admin'], function() {
	// Route::post('get-questions', [AdminController::class, 'getQuestions']);
	// Route::post('create-question', [AdminController::class, 'createQuestion']);
	// Route::post('update-question', [AdminController::class, 'updateQuestion']);
	// Route::post('delete-question', [AdminController::class, 'deleteQuestion']);
	
	// Route::post('get-dares', [AdminController::class, 'getDares']);
	// Route::post('create-dare', [AdminController::class, 'createDare']);
	// Route::post('update-dare', [AdminController::class, 'updateDare']);
	// Route::post('delete-dare', [AdminController::class, 'deleteDare']);

	Route::post('get-dice', [AdminController::class, 'getDice']);
	Route::post('replace-dice', [AdminController::class, 'replaceDice']);

	Route::post('get-softs', [AdminController::class, 'getSofts']);
	Route::post('get-all-softs', [AdminController::class, 'getAllSofts']);
	Route::post('create-soft', [AdminController::class, 'createSoft']);
	Route::post('update-soft', [AdminController::class, 'updateSoft']);
	Route::post('delete-soft', [AdminController::class, 'deleteSoft']);

	Route::post('get-hots', [AdminController::class, 'getHots']);
	Route::post('get-all-hots', [AdminController::class, 'getAllHots']);
	Route::post('create-hot', [AdminController::class, 'createHot']);
	Route::post('update-hot', [AdminController::class, 'updateHot']);
	Route::post('delete-hot', [AdminController::class, 'deleteHot']);
});

Route::group(['middleware' => 'api', 'prefix' => 'rate'], function() {
	Route::post('soft', [RateController::class, 'rateCoupleSoft']);
});
