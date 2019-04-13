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

//Adminpanel
Route::group(['middleware' => ['web']], function () {
    Route::group(['namespace' => 'Admin'], function () {
        //set personal info & Avatar & Password
        Route::get('/profile/{name}' , 'AdminController@profile');
        Route::post('/updateUser' ,'AdminController@updateUser');
        Route::post('/setAvatar' , 'AdminController@updateAdminImage');
        Route::post('/set_password' , 'AdminController@set_password');
        //Dashboard
        Route::GET('/adminpanel', 'AdminController@dashboard');
        //setting
        Route::Post('/settings/update'  , 'SettingController@update');
        Route::Resource('/settings', 'SettingController');
        //head-descriptions
        Route::Post('/head-descriptions/store', 'HeadDescriptionController@store');
        Route::Post('/head-descriptions/update', 'HeadDescriptionController@update');
        Route::Resource('/head-descriptions', 'HeadDescriptionController');
        //about us
        Route::Post('/about-us/store', 'AboutUsController@store');
        Route::Post('/about-us/update', 'AboutUsController@update');
        Route::Resource('/about-us', 'AboutUsController');
        //projects
        Route::Post('/projects/store', 'ProjectController@store');
        Route::Post('/projects/update', 'ProjectController@update');
        Route::Resource('/projects', 'ProjectController');
        //services
        Route::Post('/services/store', 'ServiceController@store');
        Route::Post('/services/update', 'ServiceController@update');
        Route::Resource('/services', 'ServiceController');
        //expertises
        Route::Post('/expertises/store', 'ExpertiseController@store');
        Route::Post('/expertises/update', 'ExpertiseController@update');
        Route::Resource('/expertises', 'ExpertiseController');
        //managments
        Route::Post('/managments/store', 'ManagmentController@store');
        Route::Post('/managments/update', 'ManagmentController@update');
        Route::Resource('/managments', 'ManagmentController');
        //clients
        Route::Resource('/clients', 'ClientController');
        //managments
        Route::Post('/managments/store', 'ManagmentController@store');
        Route::Post('/managments/update', 'ManagmentController@update');
        Route::Resource('/managments', 'ManagmentController');
        //publications
        Route::Post('/publications/store', 'PublicationController@store');
        Route::Post('/publications/update', 'PublicationController@update');
        Route::Resource('/publications', 'PublicationController');
        //consultancies
        Route::Post('/consultancies/store', 'ConsultancyController@store');
        Route::Post('/consultancies/update', 'ConsultancyController@update');
        Route::Resource('/consultancies', 'ConsultancyController');
        //news
        Route::Post('/news/store', 'NewController@store');
        Route::Post('/news/update', 'NewController@update');
        Route::Resource('/news', 'NewController');
    });

    Auth::routes();
});


