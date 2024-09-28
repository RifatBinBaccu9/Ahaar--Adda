<?php

namespace App\Http\Controllers;

use App\Models\BreakFast;
use App\Models\Dinner;
use App\Models\Launch;
use App\Models\AddService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $serviceStor=AddService::get();
        $breakfastStor=BreakFast::get();
        $launchfastStor=Launch::get();
        $dinnerStor=Dinner::get();
        return view('font-site.pages.home', ['serviceView'=>$serviceStor, 'BreakfastView'=>$breakfastStor, 'launchView'=>$launchfastStor, 'dinnerView'=>$dinnerStor]);
    }
}
