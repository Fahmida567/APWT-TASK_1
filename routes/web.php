<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\productController;




Route::get('/',[productController::class,'HomePage'])-> name('Homee');

Route::get('/about',[productController::class,'AboutPage'])-> name('About');

Route::get('/teams',[productController::class,'TeamsPage'])-> name('Teams');

Route::get('/contact',[productController::class,'ContactPage'])-> name('Contact');

Route::get('/service',[productController::class,'ServicePage'])-> name('Service');

