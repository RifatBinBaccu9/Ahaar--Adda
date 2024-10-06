<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NavbarUpdateController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SignupLoginControllr;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');


//admin Navbar update section
Route::get('/admin/navbarUpdateForm', [NavbarUpdateController::class, 'navbarUpdateForm'])->name('navbar');
Route::post('/admin/navbarUpdate/push', [NavbarUpdateController::class, 'navbarUpdateFormPush'])->name('navbarPush');



//// Sign Up section  ////
Route::get('/signup', [SignupLoginControllr::class, 'signup'])->name('signup');
Route::post('/signup/push', [SignupLoginControllr::class, 'signupPush'])->name('signupPush');

// Login section
Route::get('/login', [SignupLoginControllr::class, 'login'])->name('login');
Route::post('/login/push', [SignupLoginControllr::class, 'loginPush'])->name('loginPush');

// Log Out section
Route::get('/logout', [SignupLoginControllr::class, 'logout'])->name('logout');



//// admin Carousel update section ////
Route::get('/admin/carouselUpdateForm', [CarouselController::class, 'carouselUpdateForm']);
Route::post('/admin/carouselUpdate/push', [CarouselController::class, 'carouselUpdatePush'])->name('carouselUpdatePush');



//// About section ////
Route::get('/about', [AboutController::class, 'about']);

// admin about update section
Route::get('/admin/aboutUpdateForm', [AboutController::class, 'aboutUpdateForm']);
Route::post('/admin/aboutUpdate/push', [AboutController::class, 'aboutUpdatePush'])->name('aboutUpdatePush');



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

Route::post('/posts/accept/{id}', [ServiceController::class, 'accept'])->name('posts.accept');
Route::post('/posts/reject{id}', [ServiceController::class, 'reject'])->name('posts.reject');



//// Food Menu section  ////
Route::get('/menu', [FoodMenuController::class, 'menu'])->name('menu');

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



//// Team Member section ////
Route::get('/team', [TeamController::class, 'team']);

// admin add Team section 
Route::get('admin/addTeam', [TeamController::class, 'addTeam']);
Route::post('admin/addTeam/push', [TeamController::class, 'addTeamPush'])->name('addTeamPush');

// admin team List section
Route::get('admin/addTeam/list', [TeamController::class, 'TeamList'])->name('TeamList');

// admin team List update section
Route::get('admin/addTeam/list/update/{id}', [TeamController::class, 'TeamListUpdate'])->name('TeamListUpdate');
Route::post('admin/addTeam/list/edit', [TeamController::class, 'TeamListEdit'])->name('TeamListEdit');

// admin team List delete section
Route::get('admin/addTeam/delete/{id}', [TeamController::class, 'TeamListDelete'])->name('TeamListDelete');



//// testimonial section  ////
Route::get('/testimonial', [TestimonialController::class, 'testimonial']);

// admin add testimonial section
Route::get('/admin/addTestimonial', [TestimonialController::class, 'addTestimonial']);
Route::post('/admin/addTestimonial/push', [TestimonialController::class, 'addTestimonialPush'])->name('addTestimonialPush');

// admin testimonial list section
Route::get('/admin/addTestimonial/list', [TestimonialController::class, 'TestimonialList'])->name('TestimonialList');

// admin Testimonial update section
Route::get('/admin/addTestimonial/list/update/{id}', [TestimonialController::class, 'TestimonialListupdate'])->name('TestimonialListupdate');
Route::post('/admin/addTestimonial/list/edit', [TestimonialController::class, 'TestimonialListEdit'])->name('TestimonialListEdit');

// admin Testimonial delete section
Route::get('/admin/addTestimonial/list/delete/{id}', [TestimonialController::class, 'TestimonialListdelete'])->name('TestimonialListdelete');



////  Contact section  ////
Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact/push', [ContactController::class, 'contactPush'])->name('contactPush');

// contact List section
Route::get('/admin/contact/list', [ContactController::class, 'contactList'])->name('contactList');



//// admin Footer update section ////
Route::get('/admin/footerUpdateForm', [FooterController::class, 'footerUpdateForm']);
Route::post('/admin/footerUpdatePush', [FooterController::class, 'footerUpdatePush'])->name('footerUpdatePush');





//// Admin-site secton ////
Route::get('/admin', function () {
    $user=Auth::user();
    return view('admin-site.pages.home',[
        'user'=>$user
    ]);
})->name('admin')->middleware('admin');



//// user profile ////
Route::get('/user/profile', [UserProfileController::class, 'userProfile'])->name('userProfile');
Route::post('/user/profile/updateProfile', [UserProfileController::class, 'updateProfile'])->name('updateProfile');

// password update
Route::post('/user/profile/updatePassword', [UserProfileController::class, 'updatePassword'])->name('updatePassword');



//// Mail Sent  ////
Route::get('/SentMail', [MailController::class, 'SentMail']);



//// user-site section ////
Route::get('/user', function (){
    return view('user-site');
});