<?php

use Illuminate\Support\Facades\Route;
use Rbarden\Hello\Http\Controllers\SubmissionController;

Route::get(config('hello.public_url'), SubmissionController::class . '@create')->name('hello.create');
Route::post(config('hello.public_url'), SubmissionController::class . '@store')->name('hello.store');

Route::get(config('hello.private_url'), SubmissionController::class . '@index')->name('hello.index');
Route::delete(config('hello.private_url') . '/{submission}', SubmissionController::class . '@destroy')->name('hello.destroy');
