<?php


//******************************* DASHBOARD ROUTES  ***********************************

Route::group(['prefix' => 'dashboard', 'as' => 'admin.', 'namespace' => 'Admin'], function () {

    Route::get('/', 'IndexController@index')->name('home');

    //USERS
    Route::resource('admins', 'AdminsController');
    Route::resource('assistants', 'AssistantsController');


    //GENERAL
    Route::resource('banners', 'BannersController');
    Route::resource('partners', 'PartnersController');
    Route::resource('our-team', 'AlraedPlayersController');
    Route::resource('multimedia', 'MultiMediaController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('news', 'NewsController');


    //PLAYERS
    Route::resource('countries', 'CountriesController');
    Route::resource('teams', 'TeamsController');
    Route::resource('players', 'TeamPlayersController');

    //MATCHES
    Route::resource('champions', 'ChampionsController');
    Route::resource('matches', 'MatchesController');
    Route::resource('statistics', 'StatisticsController');


    //SYSTEM SETTINGS
    Route::resource('settings', 'SettingsController');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
