<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WelcomeController@index')->name('index');

Route::post('/', [
    'uses' => 'WelcomeController@AppointmentForm',
    'as' => 'appointment.store'
]);
// Route::post('consult', [
//     'uses' => 'WelcomeController@ConsultationForm',
//     'as' => 'consultation.store'
// ]);
// Route::get('/comingsoon', function () {
//     return view('comingSoon');
// });
Route::get('/comingsoon', 'ComingSoonController@index')->name('index');

// Route::get('/about-us', function () {
//     return view('aboutUs');
// });

Route::get('/about-us', 'AboutUsController@index')->name('about_us');
Route::get('/leadership', 'AboutUsController@leaderShip')->name('leadership');
Route::get('/leadership/akisanmi-ayomide', 'AboutUsController@akisanmiAyomide')->name('akisanmi_ayomide');
Route::get('/leadership/mohammedamin-abdi', 'AboutUsController@mohammedaminAbdi')->name('mohammedamin_abdi');
Route::get('/leadership/elemson-ifeanyi', 'AboutUsController@elemsonIfeanyi')->name('elemson_ifeanyi');

Route::get('/why-choose-us', 'AboutUsController@whyChooseUs')->name('why_choose_us');

Route::get('/contact-us', 'ContactUsController@index')->name('contact_us');

// Post form data
Route::post('/contact', [
    'uses' => 'ContactUsController@ContactUsForm',
    'as' => 'contact.store'
]);

