<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationLaravel;
use App\Http\Controllers\OneToMany;
use App\Http\Controllers\HasOne;
use App\Http\Controllers\HasMany;
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

Route::controller(RelationLaravel::class)->group(function () {
    Route::get('/', 'welcome');
    Route::get('add_data', 'add_data');
});
Route::controller(OneToMany::class)->group(function () {
    Route::get('oneToMany', 'oneToMany');
    Route::get('oneToMany/add_author', 'add_author');
    Route::get('oneToMany/add_post', 'add_post');
});
Route::controller(HasOne::class)->group(function () {
    Route::get('hasOne', 'hasOne');
    Route::get('hasOne/add_mechanic', 'add_mechanic');
    Route::get('hasOne/add_car', 'add_car');
    Route::get('hasOne/add_owner', 'add_Owner');
});
Route::controller(HasMany::class)->group(function () {
    Route::get('hasMany', 'hasMany');
    Route::get('hasMany/add_project', 'add_project');
    Route::get('hasMany/add_lang', 'add_lang');
    Route::get('hasMany/add_deploy', 'add_deploy');
});
