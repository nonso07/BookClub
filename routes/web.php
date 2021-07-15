<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginRegController;
use App\Http\Controllers\appNavController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PDFreceiptController;


/*loginRegController
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
/************Login Route starts here */
Route::get('/singin', [loginRegController::class, 'loginPage']);

Route::post('/singin', [loginRegController::class, 'login']);

Route::post('/singout', [loginRegController::class, 'logout']);
/************ end of loing and logout route */

Route::get('/singUp', [loginRegController::class, 'regPage']); // leading to the login page
Route::Post('/singUp', [loginRegController::class, 'singUp']); // This route get the post requst from the login post
Route::post('/updateUserForm', [loginRegController::class, 'updateUserForm']); //update rout
Route::post('imgEdit', [loginRegController::class, 'imgEdit'])->name('imgEdit'); // Change image route
//Route::get('/singUp', [loginRegController::class, 'singUp']);

//Recipt for paid members
Route::get('/pdfpreview', [PDFreceiptController::class, 'preview'])->name('pdf.preview'); // view recipet page rout for paid user
Route::get('/pdfgenerate', [PDFreceiptController::class, 'generatePDF'])->name('pdf.generate'); // generating recipet to pdf
Route::get('/viewReceipt', [PDFreceiptController::class,'viewReceipt']);
/******************************************************** */

//appNavController 
Route::get('/ ', [appNavController::class, 'Home']); // Home page route
Route::get('/aboutUs ', [appNavController::class, 'about']);
Route::get('/books ', [appNavController::class, 'books']);
Route::get('/booksDownload/{mediaItem}', [appNavController::class, 'show']);
Route::get('/booksList ', [appNavController::class, 'bookList']);
Route::get('/bookView/{id}/{book_id} ', [appNavController::class, 'bookView']);
Route::post('/comment ', [appNavController::class, 'comment']);
Route::get('/editCommte/{id}', [appNavController::class, 'editCommte']);
Route::get('/deletCommte/{id}', [appNavController::class, 'deletCommte']); //deletCommte
Route::get('/premium', [appNavController::class, 'premium']); //premium
Route::get('/profile', [appNavController::class, 'profile']); //profile page route
Route::get('/profilEdit', [appNavController::class, 'profilEdit']); //edit user profile
/********************************************************* */
// Laravel 8
Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay'); // paystack route

// Laravel 8
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);// paystack route 


/**************      ********************* */



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

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('book-uploads')->name('book-uploads/')->group(static function() {
            Route::get('/',                                             'BookUploadController@index')->name('index');
            Route::get('/create',                                       'BookUploadController@create')->name('create');
            Route::post('/',                                            'BookUploadController@store')->name('store');
            Route::get('/{bookUpload}/edit',                            'BookUploadController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BookUploadController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{bookUpload}',                                'BookUploadController@update')->name('update');
            Route::delete('/{bookUpload}',                              'BookUploadController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('book-cats')->name('book-cats/')->group(static function() {
            Route::get('/',                                             'BookCatController@index')->name('index');
            Route::get('/create',                                       'BookCatController@create')->name('create');
            Route::post('/',                                            'BookCatController@store')->name('store');
            Route::get('/{bookCat}/edit',                               'BookCatController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BookCatController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{bookCat}',                                   'BookCatController@update')->name('update');
            Route::delete('/{bookCat}',                                 'BookCatController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('comments')->name('comments/')->group(static function() {
            Route::get('/',                                             'CommentController@index')->name('index');
            Route::get('/create',                                       'CommentController@create')->name('create');
            Route::post('/',                                            'CommentController@store')->name('store');
            Route::get('/{comment}/edit',                               'CommentController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CommentController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{comment}',                                   'CommentController@update')->name('update');
            Route::delete('/{comment}',                                 'CommentController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('receipts')->name('receipts/')->group(static function() {
            Route::get('/',                                             'ReceiptsController@index')->name('index');
            Route::get('/create',                                       'ReceiptsController@create')->name('create');
            Route::post('/',                                            'ReceiptsController@store')->name('store');
            Route::get('/{receipt}/edit',                               'ReceiptsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ReceiptsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{receipt}',                                   'ReceiptsController@update')->name('update');
            Route::delete('/{receipt}',                                 'ReceiptsController@destroy')->name('destroy');
        });
    });
});