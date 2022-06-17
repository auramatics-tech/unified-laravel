<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\MainCategory;

class ProductCategoryController extends Controller
{
    public function product_category (){
        $category = MainCategory::all();
        return view('frontend.ProductCategory',compact('category'));

    }
}
