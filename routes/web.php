<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\loginController;
use App\Http\Controllers\frontend\SupportController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\BlogControllaer;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\ProfilerController;
use App\Http\Controllers\frontend\FavoritesController;
use App\Http\Controllers\frontend\PartnershipController;
use App\Http\Controllers\frontend\BirminghamController;
use App\Http\Controllers\frontend\MontgomeryController;
use App\Http\Controllers\MontgomeryimgController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ShowProfileController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Birminghamimg;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Paymentcontroller;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomizationControoler;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('welcome');
Route::get('/service' ,[ServiceController::class,'index']);
Route::get('/page',[CustomizationControoler::class,'page'])->name('page');
Route::get('/front_page',[CustomizationControoler::class,'index'])->name('front_page');
Route::get('/showvideo/{id}',[CustomizationControoler::class,'showvideo'])->name('showvideo');
Route::get('/deletevideo/{id}',[CustomizationControoler::class,'deletevideo'])->name('deletevideo');
Route::post('uploadVideo',[CustomizationControoler::class,'uploadVideo']);
Route::get('/show_front/{id}',[CustomizationControoler::class,'show_front'])->name('show_front');


Route::get('/blog' ,[BlogControllaer::class,'index']);
Route::get('/news' ,[NewsController::class,'index']);
Route::get('/about' ,[AboutController::class,'index']);
Route::get('/support' ,[SupportController::class,'index']);
Route::get('/gallery/{title_id}',[GalleryController::class,'gallery'])->name('gallery');
// ContactController
Route::get('/contect' ,[ContactController::class,'index']);
Route::get('/dashboard' ,[ContactController::class,'dashboard']);
Route::get('/dashboard' ,[ContactController::class,'dashboard']);
// Route::get('/delete',[ProfilerController::class,'delete']);
// Route::get('update',[ProfilerController::class,'update'])->name('update-profile');
Route::get('/profile' ,[ProfilerController::class,'showuser']);
Route::get('/covid' ,[CovidController::class,'index']);
Route::get('/favorites' ,[FavoritesController::class,'index']);
Route::get('/parthership' ,[PartnershipController::class,'index']);

Route::get('/montgomery/{place}' ,[MontgomeryController::class,'index']);
Route::get('/birmingham' ,[BirminghamController::class,'index']);
Route::get('/montgomeryimg/{place}-{slug}' ,[MontgomeryimgController::class,'index']);
Route::get('/Birminghamimg/{files_id}-{title}' ,[Birminghamimg::class,'index']);
// ListController
Route::get('/delete/{id}',[ListController::class,'delete']);
Route::get('/edit/{id}',[ListController::class,'edit']);
Route::put('/Update-data/{id}',[ListController::class,'update']);
Route::get('/deletevalidation/{id}',[ ListController::class,'delete']);
// FileController
Route::get('/image/', [FileController::class, 'create']);
Route::post('/file/', [FileController::class, 'store']);
Route::get('title-get-slug',[FileController::class,'getSlub'])->name('title.slug');






Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::namespace('Admin')->prefix('Admin')->middleware(['auth','admin'])->group(function ()
// {
	Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
	Route::get('/changepassword' ,[ChangePasswordController::class,'changepassword'])->name('changepassword');
	Route::post('/changePassword',[ChangePasswordController::class, 'changePasswordPost'])->name('changePasswordPost');
	Route::get('/showprofile' ,[ShowProfileController::class,'showprofile'])->name('showprofile');
	Route::post('/update',[ShowProfileController::class,'update'])->name('update');
	Route::get('/payment',[Paymentcontroller::class,'payment'])->name('payment');
	Route::get('/pay/',[Paymentcontroller::class,'pay'])->name('pay');
	Route::get('/list',[ListController::class,'list'])->name('list');
	// BookingController
	Route::get('/booking',[BookingController::class,'index'])->name('booking');
	Route::get('/bookingadd',[BookingController::class,'add'])->name('bookingadd');
	Route::get('showbooking/{id}',[BookingController::class,'showbooking'])->name('showbooking');
	Route::get('/allbooking/{id}',[BookingController::class,'allbooking'])->name('allbooking');
	Route::get('/editbooking/{id}',[BookingController::class,'editbooking'])->name('editbooking');
	Route::get('/updatebooking/{id}',[BookingController::class,'updatebooking'])->name('updatebooking');
	Route::get('/deletebooking/{id}',[BookingController::class,'deletebooking'])->name('deletebooking');
	// ListingController
	Route::get('/listing',[ListingController::class,'listing'])->name('listing');
	Route::get('/showlisting/',[ListingController::class,'showlisting'])->name('showlisting');
	Route::get('/listdelete/{title_id}/{file_id}/{feacture_id}',[ListingController::class,'listdelete'])->name('listdelete');


	Route::get('/listedit/{id}/{files_id}/{feacture_id}',[ListingController::class,'listedit'])->name('listedit');

	Route::get('/showlist/{title_id}',[ListingController::class,'showlist'])->name('showlist');
	Route::post('/updatelist/{title_id}/{files_id}/{feacture_id}',[ListingController::class,'updatelist'])->name('updatelist');
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// });


