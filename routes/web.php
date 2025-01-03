<?php

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminSignController;
use App\Http\Controllers\AdminScheduleController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminTourController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminStaffController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminPlacesController;
use App\Http\Controllers\AdminFeedbackController;
use App\Http\Controllers\AdminTourguideController;

use App\Http\Controllers\UserContactController;
use App\Http\Controllers\UserPaymentContronller;
use App\Http\Controllers\UserTourdetailController;
use App\Http\Controllers\UserTourController;
use App\Http\Controllers\UserAboutController;
use App\Http\Controllers\UserNewsController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserSignController;
use App\Http\Controllers\UserHomeController;
use Illuminate\Http\Request;

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
    return redirect()->route('user.home');
});
Route::prefix('/admin')->name('admin.')->group(function(){
    Route::get('/sign',[AdminSignController::class,'login'])->name('sign');
    Route::get('/checklogin',[AdminSignController::class,'checkLogin'])->name('checklogin');

    Route::get('/signup',[AdminSignController::class,'signup'])->name('signup');
    Route::get('/checkregister',[AdminSignController::class,'checkRegister'])->name('checkregister');

    Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('dashboard');

    Route::get('/tour',[AdminTourController::class,'index'])->name('tour');

    Route::get('/schedule',[AdminScheduleController::class,'index'])->name('schedule');

    Route::get('/order',[AdminOrderController::class,'index'])->name('order');

    Route::get('/customer',[AdminCustomerController::class,'index'])->name('customer');

    Route::get('/staff',[AdminStaffController::class,'index'])->name('staff');

    Route::get('/news',[AdminNewsController::class,'index'])->name('news');

    Route::get('/places',[AdminPlacesController::class,'index'])->name('places');

    Route::get('/feedback',[AdminFeedbackController::class,'index'])->name('feedback');

    Route::get('/tourguide',[AdminTourguideController::class,'index'])->name('tourguide');

    Route::get('logout',[AdminSignController::class,'logout']);

    Route::prefix('/control')->name('control.')->group(function(){
        Route::get('/insertTour',[AdminTourController::class,'insertTour'])->name('insertTour');
        Route::post('/insertTourPost',[AdminTourController::class,'insertTourPost'])->name('insertTourPost');
        Route::get('/updateTour/{id}',[AdminTourController::class,'updateTour'])->name('updateTour');
        Route::post('/updateTourPost',[AdminTourController::class,'updateTourPost'])->name('updateTourPost');
        Route::get('/deleteTour/{id}',[AdminTourController::class,'deleteTour'])->name('deleteTour');

        Route::get('insertSchedule',[AdminScheduleController::class,'insertSchedule'])->name('insertSchedule');
        Route::get('insertSchedulePost',[AdminScheduleController::class,'insertSchedulePost'])->name('insertSchedule');
        Route::get('updateSchedule/{id}',[AdminScheduleController::class,'updateSchedule'])->name('updateSchedule');
        Route::get('updateSchedulePost',[AdminScheduleController::class,'updateSchedulePost'])->name('updateSchedule');
        Route::get('deleteSchedule/{id}',[AdminScheduleController::class,'deleteSchedule'])->name('deleteSchedule');

        Route::get('changeOn/{id}',[AdminOrderController::class,'changeOn']);
        Route::get('changeOff/{id}',[AdminOrderController::class,'changeOff']);
        Route::get('deleteOrder/{id}',[AdminOrderController::class,'deleteOrder']);


        Route::get('insertNews',[AdminNewsController::class,'insertNews']);
        Route::post('insertNewsPost',[AdminNewsController::class,'insertNewsPost']);
        Route::get('updateNews/{id}',[AdminNewsController::class,'updateNews']);
        Route::post('updateNewsPost',[AdminNewsController::class,'updateNewsPost']);
        Route::get('deleteNews/{id}',[AdminNewsController::class,'deleteNews']);

        Route::get('lock/{id}',[AdminCustomerController::class,'lock']);
        Route::get('unlock/{id}',[AdminCustomerController::class,'unlock']);
        Route::get('deleteCustomer/{id}',[AdminCustomerController::class,'deleteCustomer']);

        Route::get('lockStaff/{id}',[AdminStaffController::class,'lock']);
        Route::get('unlockStaff/{id}',[AdminStaffController::class,'unlock']);

        Route::get('insertPlaces',[AdminPlacesController::class,'insertPlaces']);
        Route::post('insertPlacesPost',[AdminPlacesController::class,'insertPlacesPost']);
        Route::get('updatePlaces/{id}',[AdminPlacesController::class,'updatePlaces']);
        Route::post('updatePlacesPost',[AdminPlacesController::class,'updatePlacesPost']);
        Route::get('deletePlaces/{id}',[AdminPlacesController::class,'deletePlaces']);

        Route::get('updateFeedback/{id}',[AdminFeedbackController::class,'updateFeedback']);
        Route::get('updateFeedbackPost',[AdminFeedbackController::class,'updateFeedbackPost']);

       Route::get('lockGuide/{id}',[AdminTourguideController::class,'lock']);
       Route::get('unlockGuide/{id}',[AdminTourguideController::class,'unlock']);

    });

});



Route::prefix('/user')->name('user.')->group(function(){
    Route::get('/home',[UserHomeController::class,'index'])->name('home');

    Route::get('/sign',[UserSignController::class,'index'])->name('sign');
    Route::get('/register',[UserSignController::class,'register'])->name('register');
    Route::get('/checkRegister',[UserSignController::class,'checkRegister'])->name('checkRegister');
    Route::get('/checkLogin',[UserSignController::class,'checkLogin'])->name('checkLogin');

    Route::get('/profile',[UserProfileController::class,'index'])->name('profile');
    Route::get('/saveProfile',[UserProfileController::class,'saveProfile']);
    Route::get('/profile/deleteCmt/{id}',[UserProfileController::class,'deleteCmt']);
    Route::get('/logout',[UserProfileController::class,'logout']);

    Route::get('news',[UserNewsController::class,'index']);
    Route::get('newsdetail/{id}',[UserNewsController::class,'newsdetail']);
    Route::get('allnews',[UserNewsController::class,'allnews']);

    Route::get('/about',[UserAboutController::class,'index']);

    Route::get('/contact',[UserContactController::class,'index'])->name('contact');
    Route::get('/contactPost',[UserContactController::class,'contactPost']);

    Route::get('/tour',[UserTourController::class,'index'])->name('tour');

    // Route::get('/tourdetail/{tourid}/{scheid}',[UserTourdetailController::class,'index']);
    Route::get('/tourdetail/{scheid}',[UserTourdetailController::class,'index']);
    Route::get('tour/detailtour/feedback',[UserTourdetailController::class,'feedback']);

    Route::get('/payment/{scheid}',[UserPaymentContronller::class,'index'])->name('payment');
    Route::get('/paymentPost',[UserPaymentContronller::class,'paymentPost']);



});