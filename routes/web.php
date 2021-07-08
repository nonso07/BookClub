<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginRegController;
use App\Http\Controllers\appNavController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/hello', function () {
    return view('admin.hello-world');
});

Route::get('/singUp', [loginRegController::class, 'regPage']);
Route::Post('/singUp', [loginRegController::class, 'singUp']);
//Route::get('/singUp', [loginRegController::class, 'singUp']);

//appNavController
Route::get('/ ', [appNavController::class, 'Home']);
Route::get('/aboutUs ', [appNavController::class, 'about']);


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('book-types')->name('book-types/')->group(static function() {
            Route::get('/',                                             'BookTypeController@index')->name('index');
            Route::get('/create',                                       'BookTypeController@create')->name('create');
            Route::post('/',                                            'BookTypeController@store')->name('store');
            Route::get('/{bookType}/edit',                              'BookTypeController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BookTypeController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{bookType}',                                  'BookTypeController@update')->name('update');
            Route::delete('/{bookType}',                                'BookTypeController@destroy')->name('destroy');
        });
    });
});