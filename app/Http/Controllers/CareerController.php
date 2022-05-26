<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;

class CareerController extends Controller
{
    public function career(){
        $jobs = Jobs::orderBy('id','desc')->get();
        $newsList = News::orderBy('id','desc')->get();
        return view('frontend.career',compact('jobs','newsList'));
    }
}
