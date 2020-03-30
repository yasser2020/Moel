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
 Route::get('/show_image/{slug}/{type}','FreelancerController@showPage')->name('showImage');
 Route::get('/currentFreelancers','FreelancerController@currentFreelancers')->name('currentFreelancers');
 //Services Route
 Route::resource('services','FreelanceServiceController');
 //ClientServices Route
 Route::resource('clientServices','ClientServicesController');
//  Route::get('/clientServices','ClientServicesController@index')->name('clientServices');
//  Route::post('/update/Services/{$slug}','ClientServicesController@doneService')->name('doneClientServices');
    
});
