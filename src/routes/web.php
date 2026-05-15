<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::view('/', 'landing.index')->name('home');
Route::view('/services', 'landing.services')->name('services');
Route::view('/contact', 'landing.contact')->name('contact');

Route::get('/crear-empleado', function () {
    Employee::create([
        'emp_id' => 1001,
        'emp_firstname' => 'Ana',
        'emp_lastname' => 'García López',
        'emp_birth_date' => '1990-04-12',
        'emp_hire_date' => '2024-09-01',
        'salary' => 24500.50,
    ]);

    return 'Empleado creado correctamente';
});