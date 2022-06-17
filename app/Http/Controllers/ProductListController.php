<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductSubCategory;
use App\Models\ProductCategory;
use App\Models\Manufacturer;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class ProductListController extends Controller
{
    public function product_list($index=0, Request $request) {

        $filterByManufacturer = $request->filterByManufacturer;
        $filterByProductsSubCategory = $request->filterByProductsSubCategory;
        $filterByProductCategory = $request->filterByProductCategory;
        $searchByValue = $request->searchByValue;
        $groupCategory = $request->groupCategoryName;
        $page = $request->page;

        $productCategoryList = ProductCategory::all();
        $productsSubCategoryList = ProductSubCategory::all();
        $manufacturerList = Manufacturer::all();
        $productList = Product::when((isset($filterByManufacturer) && count($filterByManufacturer)), function ($query) use ($filterByManufacturer) {
            $query->whereIn("manufacturer_id", $filterByManufacturer);
        })->when((isset($filterByProductsSubCategory) && count($filterByProductsSubCategory)), function ($query) use ($filterByProductsSubCategory) {
            $query->whereIn("products_sub_category_id", $filterByProductsSubCategory);
        })->when((isset($searchByValue) ), function ($query) use ($searchByValue) {
            $query->where('name', 'LIKE', "%$searchByValue%");
        })->when((isset($filterByProductCategory) && count($filterByProductCategory)), function ($query) use ($filterByProductCategory) {
            $query->whereIn("product_category_id", $filterByProductCategory);
        })->paginate(20);

        // echo "<pre>"; print_r($productList);
        // die;
        // $queryString = Input::get('search');
        // $searchproduct = Product::where('name', 'LIKE', "%$searchByValue%")->orderBy('name')->paginate(10);
        
       

        return view('frontend.propertylist',compact('productCategoryList','productsSubCategoryList','manufacturerList','productList'));

    }
    public function product_detail($id) {
        $product = Product::find($id); 
        $technicalSpecification = json_decode($product->technical_specification, true);
        $productList =  Product::where( array('productCategory'=>$product->product_category_id))->orderby('id','desc'); 
        return view('frontend.productdetail',compact('product','technicalSpecification','productList')); 
    }

}
