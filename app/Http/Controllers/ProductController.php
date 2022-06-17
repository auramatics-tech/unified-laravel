<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductSubCategory;
use App\Models\Manufacturer;
use App\Models\MainCategory;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class ProductController extends Controller
{
    public function product_category($index = '', Request $request) {

        // $Manufacturer = Product::select('manufacturer.id','manufacturer.image')
       
        // ->join('manufacturer' , 'manufacturer.id' , '=' , 'products.manufacturer_id')
        // ->groupby('manufacturer.id')
        // ->orderby('manufacturer.name','ASC')
        // ->get();
        // echo"<pre>";print_r($Manufacturer);die;
        
        $category = MainCategory::all();
        // echo"<pre>";print_r($category);die;
        return view('frontend.ProductCategory',compact('category','index'));
    }
}
