<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('font-site.pages.home');
});
Route::get('/about', function () {
    return view('font-site.pages.about');
});
Route::get('/service', function () {
    return view('font-site.pages.service');
});
Route::get('/menu', function () {
    return view('font-site.pages.menu');
});
Route::get('/booking', function () {
    return view('font-site.pages.booking');
});
Route::get('/team', function () {
    return view('font-site.pages.team');
});
Route::get('/testimonial', function () {
    return view('font-site.pages.testimonial');
});
Route::get('/contact', function () {
    return view('font-site.pages.contact');
});
