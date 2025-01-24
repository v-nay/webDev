<?php

use Illuminate\Support\Facades\Route;
use Spatie\TranslationLoader\LanguageLine;

Route::get('/', function () {
    return redirect(route('login.form'));
});

Route::get(PREFIX, function () {
    return redirect(route('login.form'));
});

Route::group(
    [
        'namespace' => 'System',
        'prefix' => PREFIX,
        'middleware' => ['language', 'pinewheel-log'],
    ],
    function () {
        Route::get('/login', 'Auth\LoginController@showLoginForm')->name(
            'login.form'
        );
        Route::post('/login', 'Auth\LoginController@login')->name('login');
      
        Route::post(
            '/set-password',
            'Auth\ResetPasswordController@handleSetResetPassword'
        );
        Route::get('/', 'Auth\LoginController@showLoginForm');
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

        
        Route::group(['middleware' => ['auth']], function () {
            Route::get(
                'change-password',
                'user\UserController@changePassword'
            )->name('change.password');
        });

        Route::group(
            ['middleware' => ['auth', 'permission', 'twofa', 'reset.password']],
            function () {
                Route::get('/home', 'IndexController@index')->name('home');
               

                Route::get('/profile', 'profile\ProfileController@index')->name(
                    'profile'
                );
                Route::put('/profile/{id}', 'profile\ProfileController@update');

              
                Route::resource('/languages', 'language\LanguageController', [
                    'except' => ['show', 'edit', 'update'],
                ]);
                Route::get(
                    '/languages/set-language/{lang}',
                    'language\LanguageController@setLanguage'
                )->name('set.lang');
                Route::get(
                    '/country-language/{country_id}',
                    'countryLanguage\CountryLanguageController@getLanguages'
                );

                Route::resource(
                    '/translations',
                    'language\TranslationController',
                    ['except' => ['show', 'edit', 'create']]
                );
               

                Route::resource('/configs', 'systemConfig\ConfigController');

              
                Route::resource('/headings', 'heading\HeadingController', [
                    'except' => ['show'],
                ]);
                Route::resource('/contacts', 'contact\ContactController', [
                    'except' => ['show'],
                ]);
                Route::resource('/reservations', 'reservation\ReservationController', [
                    'except' => ['show'],
                ]);
                Route::resource('/offerings', 'offering\OfferingController', [
                    'except' => ['show'],
                ]);
                Route::resource('/specials', 'special\SpecialController', [
                    'except' => ['show'],
                ]);
            }
        );
    }
);
