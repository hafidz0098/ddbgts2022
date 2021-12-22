<?php


use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\EmailController;

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

Route::get('/', function () {
    return view ('coming', [
        "title" => "Coming",
        'active' => 'coming',
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        'active' => 'about',
    ]);
});


Route::get('/posts', [PostController::class, 'index']); 

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/exportpeserta', 'PesertaController@pesertaexport')->name('exportpeserta')->middleware('auth'); 


Route::group(['middleware' => 'revalidate'], function()
{
 
Auth::routes();

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/daftar', 'DaftarController@index')->middleware('guest');
Route::post('/daftar', 'DaftarController@store');

// Route::get('/email', 'EmailController@index');

Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

Route::get('/dashboard/posts/checkSlug', 'DashboardPostController@checkSlug')->middleware('auth');
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class , 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', 'DashboardPostController')->middleware('auth');  

Route::resource('/dashboard/categories', 'AdminCategoryController')->except('show')->middleware('admin');

Route::resource('/dashboard/peserta-pending', 'PesertaController')->middleware('admin');

Route::resource('/dashboard/peserta-sukses', 'PesertaSuksesController')->middleware('admin');

Route::resource('/dashboard/peserta-gagal', 'PesertaGagalController')->middleware('admin');

Route::resource('/dashboard/ticketbox', 'TicketboxController')->middleware('admin');

Route::get('/dashboard/email/webinar', 'EmailController@viewWebinar')->middleware('admin');
Route::post('/dashboard/email/webinar', 'EmailController@kirimWebinar')->middleware('admin');
Route::put('/dashboard/email/webinar', 'EmailController@kirimWebinar')->middleware('admin');

Route::get('/dashboard/email/talentsmapping', 'EmailController@viewtm')->middleware('admin');
Route::post('/dashboard/email/talentsmapping', 'EmailController@kirimtm')->middleware('admin');
Route::put('/dashboard/email/talentsmapping', 'EmailController@kirimtm')->middleware('admin');

Route::get('/dashboard/email/tryout', 'EmailController@viewTryout')->middleware('admin');
Route::post('/dashboard/email/tryout', 'EmailController@kirimTryout')->middleware('admin');
Route::put('/dashboard/email/tryout', 'EmailController@kirimTryout')->middleware('admin');

Route::post('/dashboard/ticketbox', 'TicketboxController@store')->middleware('admin');

Route::get('/dashboard/daftaradmin', [RegisterController::class, 'index'])->middleware('admin');
Route::post('/dashboard/daftaradmin', [RegisterController::class, 'store'])->middleware('admin');

});


