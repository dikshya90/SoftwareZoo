<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});


Auth::routes();

// for login
// Route::post('/login/custom', 'auth\LoginController@login');

// route for homepage of user
Route::get('/','IndexController@index');

// route for about page
Route::get('/about', 'Customer\AboutController@index');

// route to list category
Route::get('/categoryListing/{id}', 'Customer\CategoryListController@index');

// route for mammal single
Route::get('/singleMammal/{id}', 'Customer\SingleAnimalController@mammal');

// route for single reptile
Route::get('/singleReptile/{id}', 'Customer\SingleAnimalController@reptile');

// route for single birds
Route::get('/singleBird/{id}', 'Customer\SingleAnimalController@bird');

// route for single fish
Route::get('/singleFish/{id}', 'Customer\SingleAnimalController@fish');

// Route::get('/single/{$id}', 'Customer\SinglePaintingController@index');

// for ticket booking
Route::get('ticket', 'Customer\TicketController@index');

// for sponsor
Route::get('sponsor', 'Customer\TicketController@sponsor');

// for submitting sponsor details
Route::match(['get', 'post'], 'contact/sponsorSubmit', 'Customer\ContactController@sponsorSubmit')->name('contact.sponsorSubmit');

// for booking ticket
Route::match(['get', 'post'], 'contact/ticketBooking', 'Customer\ContactController@ticketBooking')->name('contact.ticketBooking');

// route for contact page
Route::resource('contact', 'Customer\ContactController');

// search paintings
Route::get('/searchAnimals', 'Customer\CategoryListController@searchAnimals' );

// Route::get('/home', 'HomeController@index')->name('home');

// route for customer register page
Route::get('/registerCustomer', 'Customer\CustomerController@registerIndex');

// route for registering customer
Route::match(['get', 'post'], '/registerUser', 'Customer\CustomerController@registerUser');

// route for customer login page
Route::get('/loginCustomer','Customer\CustomerController@loginPage');

// route for customer login
Route::match(['get', 'post'], '/loginCus', 'Customer\CustomerController@login');

// route for customer logout
Route::get('/userLogout', 'Customer\CustomerController@logoutCus');

// route for terms and conditions
Route::get('/terms', 'IndexController@terms');

// route for privacy and policy
Route::get('/privacy', 'IndexController@privacy');


// make auth registration false
Auth::routes(['register'=>false]);


// login for backend
Route::get('/back','AdminController@login');


// routes after admin login
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {

    Route::get('/home', 'HomeController@index')->name('home');

    // route to view the total number of tickets
    Route::get('viewTickets', 'Admin\TicketController@viewTickets')->name('viewTickets');

    // route to view the sponsor requests
    Route::get('viewSponsors', 'Admin\SponsorController@viewSponsors')->name('viewSponsors');

    // delete the sponsors request
    Route::post('sponsorDelete/{id}','Admin\SponsorController@sponsorDelete')->name('sponsorDelete');

    // delete the ticket booking
    Route::post('ticketDelete/{id}', 'Admin\TicketController@ticketDelete')->name('ticketDelete');

    // for listing customers only
    Route::get('user/list', 'Admin\UsersController@list')->name('user.list');

    // delete customer
    Route::get('user/customerDelete/{id}', 'Admin\UsersController@customerDelete')->name('user.customerDelete');

    // route for users
    Route::resource('user', 'Admin\UsersController');

    // route for roles
    Route::resource('role', 'Admin\RolesController');

    // route for permission components
    Route::resource('permission_component', 'Admin\PermissionComponentsController');

    // route for permissions
    Route::resource('permission', 'Admin\PermissionController');

    // route for category
    Route::resource('category', 'Admin\CategoryController');

    // trashed mammal records
    Route::get('mammal/trashed', 'Admin\MammalController@trashed')->name('mammal.trashed');

    // restore mammal records
    Route::get('mammal/restore/{id}', 'Admin\MammalController@restoreTrashed')->name('mammal.restore');

    // delete mammal records permanently
    Route::get('mammal/kill/{id}', 'Admin\MammalController@killTrashed')->name('mammal.kill');

    // route for mammals
    Route::resource('mammal', 'Admin\MammalController');

    // trashed birds records
    Route::get('bird/trashed', 'Admin\BirdController@trashed')->name('bird.trashed');

    // restore bird records
    Route::get('bird/restore/{id}', 'Admin\BirdController@restoreTrashed')->name('bird.restore');

    // delete bird records permanently
    Route::get('bird/kill/{id}', 'Admin\BirdController@killTrashed')->name('bird.kill');

    // route for birds
    Route::resource('bird','Admin\BirdController');

    // trashed birds records
    Route::get('fish/trashed', 'Admin\FishController@trashed')->name('fish.trashed');

    // restore bird records
    Route::get('fish/restore/{id}', 'Admin\FishController@restoreTrashed')->name('fish.restore');

    // delete bird records permanently
    Route::get('fish/kill/{id}', 'Admin\FishController@killTrashed')->name('fish.kill');

    // route for fish
    Route::resource('fish', 'Admin\FishController');

    // route for trashed reptile and amphibian
    Route::get('reptileAmphibian/trashed', 'Admin\ReptileAmphibianController@trashed')->name('reptileAmphibian.trashed');

    // restore bird records
    Route::get('reptileAmphibian/restore/{id}', 'Admin\ReptileAmphibianController@restoreTrashed')->name('reptileAmphibian.restore');

    // delete bird records permanently
    Route::get('reptileAmphibian/kill/{id}', 'Admin\ReptileAmphibianController@killTrashed')->name('reptileAmphibian.kill');

    // route for reptiles and amphibians
    Route::resource('reptileAmphibian', 'Admin\ReptileAmphibianController');

    // route for enquiries
    Route::resource('enquiry', 'Admin\EnquiryController');


});

Route::match(['get', 'post'], '/logoutb', 'AdminController@logout');




