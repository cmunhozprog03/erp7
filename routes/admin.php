<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashController;
use Illuminate\Support\Facades\Route;

Route::get('', [DashController::class, 'index'])->name('admin.dash');
Route::resource('companies', [CompanyController::class])->names('admin.companies');