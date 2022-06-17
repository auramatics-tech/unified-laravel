<?php

use Illuminate\Support\Facades\Auth;
use App\Models\MainCategory;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;


function getallcategory_for_nav(){
    $category = MainCategory::all();
    return $category;
}
function getCartValues() {
    $products_session = Session::get('products');
    if(!empty($products_session)) {
        return count($products_session);
    }
    return 0;
}
