<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [App\Http\Controllers\api\LoginController::class, 'login']);
Route::post('/VerifyOtp', [App\Http\Controllers\api\LoginController::class, 'VerifyOtp']);
//--------home ----------
Route::get('/home', [App\Http\Controllers\api\HomeController::class, 'home']);
//--------getState ----------
Route::get('/getState', [App\Http\Controllers\api\HomeController::class, 'getState']);
//--------getDistrict ----------
Route::get('/getDistrict/{id}', [App\Http\Controllers\api\HomeController::class, 'getDistrict']);
//--------getCity ----------
Route::get('/getCity/{id}', [App\Http\Controllers\api\HomeController::class, 'getCity']);
//--------GetAllInstitutes ----------
Route::post('/GetAllInstitutes', [App\Http\Controllers\api\HomeController::class, 'GetAllInstitutes']);
//--------InstituteDetails ----------
Route::get('/InstituteDetails', [App\Http\Controllers\api\HomeController::class, 'InstituteDetails']);
//--------getReviews ----------
Route::get('/getReviews', [App\Http\Controllers\api\HomeController::class, 'getReviews']);
Route::middleware('auth:sanctum')->group(function () {
    //--------addReview ----------
    Route::post('/addReview', [App\Http\Controllers\api\HomeController::class, 'addReview']);
    //--------contactInstitute ----------
    Route::post('/contactInstitute', [App\Http\Controllers\api\HomeController::class, 'contactInstitute']);
    //--------update_profile ----------
    Route::post('/update_profile', [App\Http\Controllers\api\HomeController::class, 'update_profile']);
});
//--------poDownload ----------
Route::get('/poDownload/{id}/{id2}', [App\Http\Controllers\api\HomeController::class, 'poDownload']);
Route::get('/auctionNotifications', [App\Http\Controllers\api\HomeController::class, 'auctionNotifications']);
Route::get('/mailCheck', [App\Http\Controllers\api\HomeController::class, 'mailCheck']);
