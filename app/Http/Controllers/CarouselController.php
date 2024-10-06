<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function carouselUpdateForm (){
     return view('admin-site.pages.CreateAndUpdate.carouselUpdate');
    }
}
