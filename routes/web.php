<?php
use Illuminate\Support\Facades\File;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/command',function(){
//     File::link(
//         storage_path('app/public'), public_path('storage')
//     );
// });
Route::get('/command',function(){
    \Artisan::call('migrate:fresh --seed');
    dd('done');
});
Route::get('/run',function(){
    \Artisan::call('config:clear');
    dd('done');
});
Route::get('/updateapp', function()
{
    exec('composer dump-autoload');
    echo 'composer dump-autoload complete';
});

Route::get('/','WelcomeController@index');
Auth::routes();
Route::get('index','WelcomeController@index')->name('index');
Route::get('projecs','WelcomeController@projects')->name('projects');
Route::get('offers','WelcomeController@offers')->name('offers');
Route::post('client/save','ClientController@storeClient')->name('storeClient');
Route::get('client/edit/{id}/{type}','ClientController@editUser')->name('editUser');
Route::post('client/update/{id}/{type}','ClientController@updateClient')->name('updateClient');
Route::post('freelancer/save','ClientController@storeFreelancer')->name('storeFreelancer');
Route::get('about','WelcomeController@about')->name('whoUs');
Route::get('privacy','WelcomeController@privacy')->name('privacy');
//  Route::get('/{slug}','WelcomeController@success')->name('success');
Route::get('client','WelcomeController@createClient')->name('createClient');
Route::get('freelancer','WelcomeController@createFreelancer')->name('createFreelancer');
Route::get('freelancerPage','WelcomeController@freelancerInto')->name('freelancerPage');
Route::get('clientPage','WelcomeController@clientInto')->name('clientPage');
Route::get('/home', 'HomeController@index')->name('home');
Route::put('/accept/{id}/{type}', 'HomeController@acceptService')->name('accept');
Route::get('jointoTeam/{id}','HomeController@jointoTeam')->name('jointoTeam');
// Route::put('/team/{id}', 'HomeController@acceptServiceWith')->name('acceptWith');
