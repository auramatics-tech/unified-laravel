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
}
