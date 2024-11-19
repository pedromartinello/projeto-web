<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PokemonCrontroller;
Route::get('pokemons', [PokemonController::class, 'index']);
Route::get('pokemons/create', [PokemonController::class, 'create']);
Route::post('pokemons', [PokemonController::class, 'store']);
Route::get('pokemons/{id}/edit', [PokemonController::class, 'edit']);
Route::put('pokemons/{id}', [PokemonController::class, 'update']);
Route::delete('pokemons/{id}', [PokemonController::class, 'destroy']);

Route::get( 'coaches' , [CoachController::class , 'index' ]); 
Route::get( 'coaches/create' , [CoachController::class , 'create' ]); 
Route::post( 'coaches' , [CoachController::class , 'store' ]); 
Route::get( 'coaches/{id}/edit' , [CoachController::class , 'edit' ]); 
Route::put( 'coaches/{id}' , [CoachController::class , 'update' ]); 
Route::delete( 'coaches/{id}' , [CoachController::class , 'destroy' ]);