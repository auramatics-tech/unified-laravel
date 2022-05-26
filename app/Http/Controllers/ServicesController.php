<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;

class ServicesController extends Controller
{
    public function Services(){
        return view('frontend.service');
    }
}
