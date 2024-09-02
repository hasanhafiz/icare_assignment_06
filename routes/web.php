<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('index');

Route::get('/work-experiences', [PortfolioController::class, 'experiences'])->name('experience');

Route::get('/projects', [PortfolioController::class, 'projects'])->name('portfolio');

Route::get('/project/{id}', [PortfolioController::class, 'singleProject'])->name('portfolio_single');
