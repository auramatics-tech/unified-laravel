<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;

class NewsController extends Controller
{
    public function news($id){
        $news = News::Find($id);
        
        return view('frontend.news',compact('news'));
    }
}
