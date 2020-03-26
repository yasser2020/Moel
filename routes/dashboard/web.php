<?php
Route::prefix('dashboard')
->name('dashboard.')->
middleware(['auth','role:super_admin|administrator'])->
group(function(){

    //dashboard Route
    Route::get('/','welcomeController@index')->name('welcome');
    //Projects Route
    Route::resource('projects','ProjectController')->except('show');
    //Clients Route
    Route::resource('clients','ClientController')->except('show');
});
