<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;

class AboutController extends Controller
{
    public function About(){
        $newsList = News::orderBy('id','desc')->get();
        // echo"<pre>";print_r($newsList);die;
        return view('frontend.About',compact('newsList'));
    }
}
