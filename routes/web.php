<?php


//******************************* DASHBOARD ROUTES  ***********************************

Route::group(['prefix' => 'dashboard', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware'=>'admin'], function () {

    Route::get('/', 'IndexController@index')->name('home');

    //USERS
    Route::resource('admins', 'AdminsController')->middleware('permission:admins');
    Route::resource('assistants', 'AssistantsController')->middleware('permission:assistants');

        //ACTIVATE ACCOUNTS
        Route::get('activate/{id}','ActivateAccountsController@activate')->name('Activate');
        Route::get('deactivate/{id}','ActivateAccountsController@deactivate')->name('Deactivate');


    //GENERAL
    Route::resource('banners', 'BannersController')->middleware('permission:banners');
    Route::resource('partners', 'PartnersController')->middleware('permission:partners');
    Route::resource('our-team', 'AlraedPlayersController')->middleware('permission:our-team');
    Route::resource('multimedia', 'MultiMediaController')->middleware('permission:multimedia');
    Route::resource('categories', 'CategoriesController')->middleware('permission:categories');
    Route::resource('news', 'NewsController')->middleware('permission:news');


    //PLAYERS
    Route::resource('countries', 'CountriesController')->middleware('permission:countries');
    Route::resource('teams', 'TeamsController')->middleware('permission:teams');
    Route::resource('players', 'TeamPlayersController')->middleware('permission:players');

    //MATCHES
    Route::resource('champions', 'ChampionsController')->middleware('permission:champions');
    Route::resource('matches', 'MatchesController')->middleware('permission:matches');
    Route::resource('goals', 'GoalsController')->middleware('permission:goals');
    Route::resource('statistics', 'StatisticsController')->middleware('permission:statistics');


    //SYSTEM SETTINGS
    Route::resource('permissions','PermissionController')->middleware('permission:permissions');
    Route::get('permissions/delete_user/{id}','PermissionController@delete_user')->name('permissions.delete_user');
    Route::resource('settings', 'SettingsController')->middleware('permission:settings');

    //Ajax Routes
    Route::get('ajax-team/{team_id}', 'GoalsController@TeamAjax');

});

//*******************************  END DASHBOARD ROUTES  ***********************************


//*******************************  WEBSITE ROUTES  ***********************************

Route::group(['namespace' => 'Site'], function () {

    Route::get('/', 'HomeController@index');
    Route::get('first-team', 'HomeController@fTeam');
    Route::get('schedule', 'HomeController@schedule');
    Route::get('match/{match}/details', ['as' => 'match.details', 'uses' => 'HomeController@matchDetails']);
    Route::get('news', 'HomeController@news');
    Route::get('tickets', 'HomeController@tickets');
    Route::get('multimedia', 'HomeController@multimedia');
    Route::get('about-alraed', 'HomeController@about');
    Route::get('other-sports', 'HomeController@otherSports');
    Route::get('karateh', 'HomeController@karateh')->name('karateh');
    Route::get('boxing', 'HomeController@boxing')->name('boxing');
    Route::get('tennis', 'HomeController@tennis')->name('tennis');
    Route::get('handball', 'HomeController@handball')->name('handball');
    Route::get('electronic', 'HomeController@electronic')->name('electronic');
    Route::get('more-news', 'HomeController@moreNews');
    Route::get('volunteer', 'HomeController@volunteer');
    Route::post('post-volunteer', 'HomeController@postVolunteer');
    Route::get('desires', 'HomeController@desires');
    Route::post('post-desires', 'HomeController@postDesires');
});




//*******************************  END WEBSITE ROUTES  ***********************************

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
