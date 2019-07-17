<?php


//******************************* DASHBOARD ROUTES  ***********************************

Route::group(['prefix' => 'dashboard', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware'=>'admin'], function () {

    Route::get('/', 'IndexController@index')->name('home');

    //USERS
    Route::resource('admins', 'AdminsController');
    Route::resource('assistants', 'AssistantsController');

        //ACTIVATE ACCOUNTS
        Route::get('activate/{id}','ActivateAccountsController@activate')->name('Activate');
        Route::get('deactivate/{id}','ActivateAccountsController@deactivate')->name('Deactivate');


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
    Route::resource('goals', 'GoalsController');
    Route::resource('statistics', 'StatisticsController');


    //SYSTEM SETTINGS
    Route::resource('settings', 'SettingsController');

    //Ajax Routes
    Route::get('ajax-team/{team_id}', 'GoalsController@TeamAjax');

});

//*******************************  END DASHBOARD ROUTES  ***********************************


//*******************************  WEBSITE ROUTES  ***********************************





//*******************************  END WEBSITE ROUTES  ***********************************

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
