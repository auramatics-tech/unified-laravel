<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;
use App\Models\Manufacturer;

class ManufacturersController extends Controller
{
    public function manufacturers(){
        $manufacturer = Manufacturer::orderBy('name','ASC')->get();
        $manufacturerList = [];
            foreach ($manufacturer as $manufacturerKey => $manufacturerValue) {
                $array['id'] = $manufacturerValue->id;
                $array['name'] = $manufacturerValue->name;
                $array['image'] = $manufacturerValue->image;
                $array['partNo'] = $manufacturerValue->part_no;
                $manufacturerList[substr($manufacturerValue->name, 0, 1)][] = $array;
            }
        return view('frontend.manufacturers',compact('manufacturerList'));
    }

}
