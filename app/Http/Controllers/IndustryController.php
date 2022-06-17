<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;

class IndustryController extends Controller
{
    public function industry(){
        return view('frontend.industry');
    }
    public function industry_detail(Request $request, $name){
        $name = $name;
        return view('frontend.industry-detail');
    }
}
