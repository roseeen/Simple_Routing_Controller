<?php

namespace app\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/AboutMe', [AboutMeController::class,'show']);
Route::get('/Skils', [SkillsController::class,'show']);
Route::get('/Hobbies', [HobbiesController::class,'show']);

?>