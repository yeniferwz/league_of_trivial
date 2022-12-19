<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PlayedgameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//GET

Route::get('demo/{id}', [GameController::class, 'index_jugar'] );

Route::get('dailyranking', [PlayedgameController::class, 'index_dailyranking'] );

Route::get('rankingglobal', [UserController::class, 'index'] );

Route::get('comprobardaily/{id}', [GameController::class, 'comprobarDaily'] );

Route::get('record/{idUser}', [PlayedgameController::class, 'index_record'] );

Route::get('daily', [GameController::class, 'index_jugarDaily'] );

Route::get('pendingrequest/{id}', [FriendController::class, 'index_pending'] );

Route::get('listfriends/{id}', [FriendController::class, 'index'] );

Route::get('indexPerfil/{id}', [UserController::class, 'indexPerfil']);

Route::get('indexChallenge',[ChallengeController::class,'index']);


//POST

Route::post('sendfriend', [FriendController::class, 'store']);

Route::post('changerequeststatus', [FriendController::class, 'update']);

Route::post('savegame', [GameController::class, 'store']);

Route::post('saveresult', [PlayedgameController::class, 'store']);

Route::post('updatescore', [PlayedgameController::class, 'update']);

Route::post('deletefriend', [FriendController::class, 'deleteFriend']);

Route::post('editProfile', [UserController::class, 'updateProfile']);

require __DIR__.'/auth.php';
