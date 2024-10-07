<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Navbar;
use App\Models\BreakFast;
use App\Models\Dinner;
use App\Models\Launch;
use App\Models\AddService;
use App\Models\Carousel;
use App\Models\Footer;
use App\Models\AddBookingPeople;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home() {
        $booking=AddBookingPeople::get();
        $footer=Footer::get();
        $about=About::get();
        $carousel=Carousel::get();
        $navbar=Navbar::get();
        $user=Auth::user();
        $TestimonialData=Testimonial::get();
        $teamStor=Team::get();
        $serviceStor=AddService::where('status', 'accepted')->get();
        $breakfastStor=BreakFast::get();
        $launchfastStor=Launch::get();
        $dinnerStor=Dinner::get();

        return view('font-site.pages.home', [
        'bookingView'=>$booking,
        'footerView'=>$footer,
        'aboutview'=>$about,
        'carouselView'=>$carousel,
        'navbarView'=>$navbar, 
        'user'=>$user, 
        'serviceView'=>$serviceStor, 
        'BreakfastView'=>$breakfastStor, 
        'launchView'=>$launchfastStor, 
        'dinnerView'=>$dinnerStor,
        'teamMemberView'=>$teamStor, 
        'TestimonialView'=>$TestimonialData]);
    }
}
