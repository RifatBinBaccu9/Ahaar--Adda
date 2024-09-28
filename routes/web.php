<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SignupLoginControllr;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', function () {
    return view('font-site.pages.about');
});



//// Serves Section   ////
Route::get('/service', [ServiceController::class, 'service']);

// Admin Add Service section
Route::get('/admin/addService', [ServiceController::class, 'addService']);
Route::post('/admin/addService/push', [ServiceController::class, 'addServicePush'])->name('addServicePush');

// Admin Service List section
Route::get('/admin/serviceList', [ServiceController::class, 'serviceList'])->name('serviceList');

// Admin service update section
Route::get('/admin/serviceList/update/{id}', [ServiceController::class, 'serviceListUpdate'])->name('serviceListUpdate');
Route::post('/admin/serviceList/edit', [ServiceController::class, 'serviceListEdit'])->name('serviceListEdit');

// Admin service list delate section
Route::get('/admin/serviceList/delete/{id}', [ServiceController::class, 'serviceListDelete'])->name('serviceListDelete');



//// Food Menu section  ////
Route::get('/menu', [FoodMenuController::class, 'menu']);

//Admin Add Breakfast section
Route::get('/admin/addBreakFast', [FoodMenuController::class, 'addBreakFast']);
Route::post('/admin/addBreakFast/push', [FoodMenuController::class, 'addBreakFastPush'])->name('addBreakFastPush');

//Admin Breakfast list section
Route::get('/admin/addBreakFast/List', [FoodMenuController::class, 'BreakFastList'])->name('BreakFastList');

//Admin Breakfast list update section
Route::get('/admin/addBreakFast/update/{id}', [FoodMenuController::class, 'BreakFastListUpdate'])->name('BreakFastListUpdate');
Route::post('/admin/addBreakFast/edit', [FoodMenuController::class, 'BreakFastListEdit'])->name('BreakFastListEdit');

//Admin Breakfast list item delete section
Route::get('/admin/addBreakFast/List/delete/{id}', [FoodMenuController::class, 'BreakFastListDelete'])->name('BreakFastListDelete');


//Admin Add Launch section
Route::get('/admin/addLaunch', [FoodMenuController::class, 'addLaunch']);
Route::post('/admin/addLaunch/push', [FoodMenuController::class, 'addLaunchPush'])->name('addLaunchPush');

//Admin launch list section
Route::get('/admin/addLaunch/List', [FoodMenuController::class, 'LaunchList'])->name('LaunchList');

//Admin launch list update section
Route::get('/admin/addLaunch/update/{id}', [FoodMenuController::class, 'LaunchListUpdate'])->name('LaunchListUpdate');
Route::post('/admin/addLaunch/edit', [FoodMenuController::class, 'LaunchListEdit'])->name('LaunchListEdit');

//Admin launch list item delete section
Route::get('/admin/addLaunch/List/delete/{id}', [FoodMenuController::class, 'LaunchListDelete'])->name('LaunchListDelete');


//Admin Add Dinner section
Route::get('/admin/addDinner', [FoodMenuController::class, 'addDinner']);
Route::post('/admin/addDinner/push', [FoodMenuController::class, 'addDinnerPush'])->name('addDinnerPush');

//Admin Dinner list section
Route::get('/admin/addDinner/List', [FoodMenuController::class, 'DinnerList'])->name('DinnerList');

// //Admin Dinner list update section
Route::get('/admin/addDinner/update/{id}', [FoodMenuController::class, 'DinnerListUpdate'])->name('DinnerListUpdate');
Route::post('/admin/addDinner/edit', [FoodMenuController::class, 'DinnerListEdit'])->name('DinnerhListEdit');

// //Admin Dinner list item delete section
Route::get('/admin/addDinner/List/delete/{id}', [FoodMenuController::class, 'DinnerListDelete'])->name('DinnerListDelete');




//// Booking Section ////
Route::get('/booking', [BookingController::class, 'booking']);
Route::post('/booking/push', [BookingController::class, 'bookingPush'])->name('bookingPush');

// Admin booking List section
Route::get('/admin/bookingList', [BookingController::class, 'bookingList'])->name('bookingList');




Route::get('/team', function () {
    return view('font-site.pages.team');
});
Route::get('/testimonial', function () {
    return view('font-site.pages.testimonial');
});
Route::get('/contact', function () {
    return view('font-site.pages.contact');
});




//// Sign Up section  ////
Route::get('/signup', [SignupLoginControllr::class, 'signup'])->name('signup');
Route::post('/signup/push', [SignupLoginControllr::class, 'signupPush'])->name('signupPush');

// Login section
Route::get('/login', [SignupLoginControllr::class, 'login'])->name('login');
Route::post('/login/push', [SignupLoginControllr::class, 'loginPush'])->name('loginPush');
// Log Out section
Route::get('/logout', [SignupLoginControllr::class, 'logout'])->name('logout');




//// Admin-site secton ////
Route::get('/admin', function () {
    return view('admin-site.pages.home');
})->name('admin')->middleware('admin');

