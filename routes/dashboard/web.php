<?php
Route::prefix('dashboard')
->name('dashboard.')->
middleware(['auth','role:super_admin|administrator'])->
group(function(){

    //dashboard Route
    Route::get('/','WelcomeController@index')->name('welcome');
    //Projects Route
    Route::resource('projects','ProjectController')->except('show');
    //Offers Route
    Route::resource('offers','OffersController')->except('show');
    Route::delete('remove_image/{id}','OffersController@remove_images')->name('remove_offer_image');
    Route::resource('settings','SettingsController')->except('show');
    //Clients Route
    Route::resource('clients','ClientController');
    Route::get('/currentClients','ClientController@currentClients')->name('currentClients');
    Route::get('/ClientsNotSubscription','ClientController@ClientsNotSubscription')->name('ClientsNotSubscription');
    Route::get('/archiveClients/{id}','ClientController@archiveClient')->name('archiveClients');
    Route::get('/blocksClients','ClientController@blocksClients')->name('blocksClients');
    Route::get('/blockClient/{id}','ClientController@block')->name('blockClient');
    Route::get('/restoreClients/{id}','ClientController@restore')->name('restore');
    //Show currentClientsData
    Route::get('/currentClientData/{slug}','ClientController@currentClientsData')->name('currentClientsData');
 //Freelancer Route
 Route::resource('freelancers','FreelancerController');
 Route::get('FreelancerServices/{email}/','FreelancerController@getFreelancerServices')->name('getFreelancerServices');
 Route::get('/show_image/{slug}/{type}','FreelancerController@showPage')->name('showImage');
 Route::get('/showFreelancerService/{email}/','FreelancerController@showFreelancerService')->name('showFreelancerService');
 Route::get('/blockFreelancer/{id}','FreelancerController@block')->name('blockFreelancer');
 Route::get('/blockFreelancers','FreelancerController@blockFreelancers')->name('BFreelancers');
 Route::get('/restoreFreelancers/{id}','FreelancerController@restore')->name('restoreFreelancer');

 Route::get('/currentFreelancers','FreelancerController@currentFreelancers')->name('currentFreelancers');
 //Services Route
 Route::resource('services','FreelanceServiceController');
 Route::put('services/arachive/{id}','FreelanceServiceController@putInArachive')->name('putInArachive');
 Route::get('arachiveService','FreelanceServiceController@archive')->name('arachiveService');
 Route::get('serviceDetailes/{id}','FreelanceServiceController@serviceDetail')->name('serviceDetailes');
 Route::get('reactiveService/{id}','FreelanceServiceController@reactiveService')->name('reactiveService');
 
 //ClientServices Route
 Route::resource('clientServices','ClientServicesController');
//  Route::get('/clientServices','ClientServicesController@index')->name('clientServices');
//  Route::post('/update/Services/{$slug}','ClientServicesController@doneService')->name('doneClientServices');
    
//Socail Networks
Route::resource('socail','SocialNetworksController')->except('show');

//Client Advantages
Route::resource('clientAdvantage','ClientsAdvantagesController')->except('show');
//Freelancer Advantages
Route::resource('freelancerAdvantage','FreelancersAdvantagesController')->except('show');
});
