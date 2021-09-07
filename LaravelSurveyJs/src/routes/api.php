<?php


Route::group(
    [
        'middleware' => config('survey-manager.api_middleware'),
        'prefix' => config('survey-manager.api_prefix'),
    ],
    function () {
        Route::resource('/survey', \laravelsurveyjs\app\Http\Controllers\API\SurveyAPIController::class, ['only' => [
            'index', 'store', 'update', 'destroy', 'show',
        ]]);
        Route::resource('/survey/{survey}/result', \laravelsurveyjs\app\Http\Controllers\API\SurveyResultAPIController::class);
    }
);
