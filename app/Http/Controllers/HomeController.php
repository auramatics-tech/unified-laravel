<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use App\Models\News;

class HomeController extends Controller
{
    public function index(){
        $manufactures = Manufacturer::orderBy('id','desc')->take(12)->get();
        $newsList = News::orderBy('id','desc')->take(4)->get();
        return view('frontend.index',compact('manufactures','newsList'));
    }
}