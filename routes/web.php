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
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/servizi', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services.index');
Route::get('/servizi/{service}', [\App\Http\Controllers\ServiceController::class, 'details'])->name('services.details');
Route::get('/contatti', [\App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');
Route::post('/contatti', [\App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index']);
/*Route::get('/mailable', function () {
  $invoice = App\Models\Contact::find(3);
  
  return new App\Mail\ContactSubmission($invoice);
});*/

Auth::routes([
  'register' => false,
  'reset'    => false,
  'verify'   => false,
]);

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
  Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
    Route::prefix('admin-users')->name('admin-users/')->group(static function () {
      Route::get('/', 'AdminUsersController@index')->name('index');
      Route::get('/create', 'AdminUsersController@create')->name('create');
      Route::post('/', 'AdminUsersController@store')->name('store');
      Route::get('/{adminUser}/impersonal-login', 'AdminUsersController@impersonalLogin')->name('impersonal-login');
      Route::get('/{adminUser}/edit', 'AdminUsersController@edit')->name('edit');
      Route::post('/{adminUser}', 'AdminUsersController@update')->name('update');
      Route::delete('/{adminUser}', 'AdminUsersController@destroy')->name('destroy');
      Route::get('/{adminUser}/resend-activation', 'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
    });
  });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
  Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
    Route::get('/profile', 'ProfileController@editProfile')->name('edit-profile');
    Route::post('/profile', 'ProfileController@updateProfile')->name('update-profile');
    Route::get('/password', 'ProfileController@editPassword')->name('edit-password');
    Route::post('/password', 'ProfileController@updatePassword')->name('update-password');
  });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
  Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
    Route::prefix('services')->name('services/')->group(static function () {
      Route::get('/', 'ServicesController@index')->name('index');
      Route::get('/create', 'ServicesController@create')->name('create');
      Route::post('/', 'ServicesController@store')->name('store');
      Route::get('/{service}/edit', 'ServicesController@edit')->name('edit');
      Route::post('/bulk-destroy', 'ServicesController@bulkDestroy')->name('bulk-destroy');
      Route::post('/{service}', 'ServicesController@update')->name('update');
      Route::delete('/{service}', 'ServicesController@destroy')->name('destroy');
    });
  });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
  Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
    Route::prefix('posts')->name('posts/')->group(static function () {
      Route::get('/', 'PostsController@index')->name('index');
      Route::get('/create', 'PostsController@create')->name('create');
      Route::post('/', 'PostsController@store')->name('store');
      Route::get('/{post}/edit', 'PostsController@edit')->name('edit');
      Route::post('/bulk-destroy', 'PostsController@bulkDestroy')->name('bulk-destroy');
      Route::post('/{post}', 'PostsController@update')->name('update');
      Route::delete('/{post}', 'PostsController@destroy')->name('destroy');
    });
  });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
  Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
    Route::prefix('media')->name('media/')->group(static function () {
      Route::get('/', 'MediaController@index')->name('index');
      Route::get('/create', 'MediaController@create')->name('create');
      Route::post('/', 'MediaController@store')->name('store');
      Route::get('/{medium}/edit', 'MediaController@edit')->name('edit');
      Route::post('/bulk-destroy', 'MediaController@bulkDestroy')->name('bulk-destroy');
      Route::post('/{medium}', 'MediaController@update')->name('update');
      Route::delete('/{medium}', 'MediaController@destroy')->name('destroy');
    });
  });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
  Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
    Route::prefix('videos')->name('videos/')->group(static function () {
      Route::get('/', 'VideosController@index')->name('index');
      Route::get('/yt/{videoId}', 'VideosController@videoInfo')->name('videoInfo');
      Route::get('/create', 'VideosController@create')->name('create');
      Route::post('/', 'VideosController@store')->name('store');
      Route::get('/{video}/edit', 'VideosController@edit')->name('edit');
      Route::post('/bulk-destroy', 'VideosController@bulkDestroy')->name('bulk-destroy');
      Route::post('/{video}', 'VideosController@update')->name('update');
      Route::delete('/{video}', 'VideosController@destroy')->name('destroy');
    });
  });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
  Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function () {
    Route::prefix('contacts')->name('contacts/')->group(static function () {
      Route::get('/', 'ContactsController@index')->name('index');
      Route::get('/create', 'ContactsController@create')->name('create');
      Route::post('/', 'ContactsController@store')->name('store');
      Route::get('/{contact}/edit', 'ContactsController@edit')->name('edit');
      Route::post('/bulk-destroy', 'ContactsController@bulkDestroy')->name('bulk-destroy');
      Route::post('/{contact}', 'ContactsController@update')->name('update');
      Route::delete('/{contact}', 'ContactsController@destroy')->name('destroy');
    });
  });
});
