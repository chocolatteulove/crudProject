<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\SalaryController;
use App\Models\Departments;
use Illuminate\Support\Facades\Route;

Route::resource('employees', EmployeesController::class);
Route::resource('departments',    DepartmentsController::class);
Route::resource('positions',    PositionsController::class);
Route::resource('attendance',    AttendanceController::class);
Route::resource('salaries',    SalaryController::class);
Route::get('/employees/create', [EmployeesController::class, 'create'])->name('employees.create');