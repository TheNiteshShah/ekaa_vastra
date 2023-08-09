<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\WebSliderController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryController;

// --------------frontend-------------
use App\Http\Controllers\HomeController;






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
//--------------------------------Institute panel Start-------//
Route::group(['prefix' => '/'], function () {
  Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
  Route::get('institute_otp', [App\Http\Controllers\HomeController::class, 'institute_otp'])->name('institute_otp');

  //find district  on base State
  Route::get('/district_find/{id}', [HomeController::class, 'district_find'])->name('district_find');

  //find City  on base District
  Route::get('/city_find/{id}', [HomeController::class, 'city_find'])->name('city_find');

  //Contact us page
  Route::get('/contact_us', [HomeController::class, 'contact_us'])->name('contact_us');

  //contact us save  page
  Route::post('/contact_us_save', [HomeController::class, 'contact_us_save'])->name('contact_us_save');

  //------------Category Details page-----//
  Route::get('/institute_list', [HomeController::class, 'institute_list'])->name('institute_list');

  //------------Category View Details page-----//
  Route::get('/institute_detail/{id}', [HomeController::class, 'institute_detail'])->name('institute_detail');

  //------------Review Data Save-----//
  Route::post('/review_data', [HomeController::class, 'review_data'])->name('review_data');

  //------------Contact Us Data Save-----//
  Route::post('/contactus_data', [HomeController::class, 'contactus_data'])->name('contactus_data');

  //About us page
  Route::get('/about_us', [HomeController::class, 'about_us'])->name('about_us');

  //Terms Condition page
  Route::get('/terms_condition', [HomeController::class, 'terms_condition'])->name('terms_condition');

  //Privacy Policy page
  Route::get('/privacy_policy', [HomeController::class, 'privacy_policy'])->name('privacy_policy');

  //Privacy Policy page
  Route::get('/filter_apply', [HomeController::class, 'filter_apply'])->name('filter_apply');


  //sign up page
  Route::get('/sign_up', [HomeController::class, 'sign_up'])->name('sign_up');

  //log in  page
  Route::get('/log_in', [HomeController::class, 'log_in'])->name('log_in');

  //login Process  page
  Route::post('/login_process', [HomeController::class, 'login_process'])->name('login_process');


  //login Otp Verify  page
  Route::post('/loginotp_verify', [HomeController::class, 'loginotp_verify'])->name('loginotp_verify');

  //find filter category on base category
  Route::get('/get_filter_cat/{id}', [HomeController::class, 'get_filter_cat'])->name('get_filter_cat');

  //find city on base state
  Route::get('/city_addfront/{id}', [HomeController::class, 'city_addfront'])->name('city_addfront');

  //find pincode on base city
  Route::get('/pincode_addfront/{id}', [HomeController::class, 'pincode_addfront'])->name('pincode_addfront');
  //find stream on base category
  Route::get('/filtercat_selectfront/{id}', [HomeController::class, 'filtercat_selectfront'])->name('filtercat_selectfront');

  //institute add from frontend
  Route::post('/institute_stored', [HomeController::class, 'institute_stored'])->name('institute_stored');

  Route::get('/user_logout', [HomeController::class, 'user_logout'])->name('user_logout');
});






Route::group(['prefix' => 'evadmin'], function () {
  Auth::routes();
  Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');
    Route::post('admin/login', [App\Http\Controllers\Backend\AdminController::class, 'login'])->name('admin.login');
    //---------admin account
    Route::get('/admin_account', [App\Http\Controllers\Backend\HomeController::class, 'admin_account'])->name('admin_account');
    //admin update form
    Route::get('/admin_updateform', [App\Http\Controllers\Backend\HomeController::class, 'admin_updateform'])->name('admin_updateform');
    //save form
    Route::post('/admin_profile_update', [App\Http\Controllers\Backend\HomeController::class, 'admin_profile_update'])->name('admin_profile_update');
    //---teams ----
    Route::resource('team', TeamController::class);
    Route::get('/status/update', [TeamController::class, 'updateStatus'])->name('team.update.status');
    Route::delete('/team/destroy/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
    //---web_slider ----
    Route::resource('web_slider', WebSliderController::class);
    Route::get('/web_slider/update/{id}', [WebSliderController::class, 'updateStatus'])->name('web_slider.update.status');
    Route::delete('/web_slider/destroy/{id}', [WebSliderController::class, 'destroy'])->name('web_slider.destroy');
    //---users ----
    Route::resource('users', UserController::class);
    Route::get('/users/update/{id}', [UserController::class, 'updateStatus'])->name('users.update.status');
    Route::delete('/users/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    //---category ----
    Route::resource('category', CategoryController::class);
    Route::get('/category/update/{id}', [CategoryController::class, 'updateStatus'])->name('category.update.status');
    Route::delete('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
  });
});
