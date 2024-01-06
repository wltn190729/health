<?php

use App\Http\Controllers\HealthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// 과제에 버전이 명시되었기에 네임스페이스 활용 버전 관리
Route::prefix('v1')->namespace('Api\V1')->group(function () {
    Route::post('/how-to-lose-weight', [HealthController::class, 'provideWeightSolution']);
});
