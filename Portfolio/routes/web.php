<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects.index');
Route::get('/projects/{id}', [PortfolioController::class, 'projectShow'])->name('projects.show');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');