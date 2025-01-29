<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// APIのルートをここに定義
Route::middleware('api')->get('/user', function (Request $request) {
    return $request->user();
});
