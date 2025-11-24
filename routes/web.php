<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return [
        [
            'title' => 'Test - use blade @including',
            'link' => route('test.with-blade-including')
        ],
        [
            'title' => 'Test - without blade @including',
            'link' => route('test.without-blade-including')
        ]
    ];
});
Route::get('with-including', [TestController::class, 'withBladeIncluding'])->name('test.with-blade-including');
Route::get('without-including', [TestController::class, 'withoutBladeIncluding'])->name('test.without-blade-including');

