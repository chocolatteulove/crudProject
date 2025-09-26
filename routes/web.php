<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

Route::resource('employees', EmployeesController::class);