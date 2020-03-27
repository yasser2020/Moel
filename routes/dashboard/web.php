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
    Route::resource('clients','ClientController');
    Route::get('/currentClients','ClientController@currentClients')->name('currentClients');
    //Show currentClientsData
    Route::get('/currentClientData/{slug}','ClientController@currentClientsData')->name('currentClientsData');
 //Freelancer Route
 Route::resource('freelancers','FreelancerController');
    
});
