<?php

namespace App\Http\Controllers;

use App\Models\BreakFast;
use App\Models\Dinner;
use App\Models\Launch;
use App\Models\AddService;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home() {
        $user=Auth::user();
        $TestimonialData=Testimonial::get();
        $teamStor=Team::get();
        $serviceStor=AddService::get();
        $breakfastStor=BreakFast::get();
        $launchfastStor=Launch::get();
        $dinnerStor=Dinner::get();
        return view('font-site.pages.home', ['user'=>$user, 'serviceView'=>$serviceStor, 'BreakfastView'=>$breakfastStor, 'launchView'=>$launchfastStor, 'dinnerView'=>$dinnerStor,'teamMemberView'=>$teamStor, 'TestimonialView'=>$TestimonialData]);
    }
}
