<?php

use Illuminate\Support\Facades\Auth;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;

function postLoad()
{
    
    $groupCategoryList = [
        'Electromechanical Components' => 'Electromechanical Components',
        'Passive Components' => 'Passive Components',
        'Power Components' => 'Power Components',
        'Interconnect' => 'Interconnect',
        'Wireless & Memory' => 'Wireless & Memory',
        'Sensors' => 'Sensors',
        'Display & Systems' => 'Display & Systems',
        'RF & Microwave' => 'RF & Microwave',
        'Batteries' => 'Batteries',
    ];
    $prodcutCategoryWithGroup = [];
    foreach ($groupCategoryList as $groupCategoryKey => $groupCategory) {
        $prodcutCategoryWithGroup[$groupCategory] = [];
        $RAW_QUERY = ProductCategory::select('product_category.id as pc_id', 'product_category.name as pc_name')
            ->join('products', 'product_category.id', 'products.product_category_id')
            ->where('products.group_category', 'like' , '%'.$groupCategory.'%')
            ->groupby('products.name')
            ->orderBy('product_category.name', 'asc')->get();
            

        if (isset($RAW_QUERY)) {
            unset($prodcutCategoryWithGroup[$groupCategory]);
        }
        foreach ($RAW_QUERY as $key => $value) {
            if (!isset($prodcutCategoryWithGroup[$groupCategory][$value['pc_id']])) {
                $prodcutCategoryWithGroup[$groupCategory][$value['pc_id']]['pc_name'] = $value['pc_name'];
            }
        }
        if(isset($prodcutCategoryWithGroup[$groupCategory]) && count($prodcutCategoryWithGroup[$groupCategory])){
            foreach ($prodcutCategoryWithGroup[$groupCategory] as $key => $cat) {
                $subcat = ProductSubCategory::where('product_category_id', $key)->orderBy('name', 'asc')->get();
                foreach ($subcat as $sub_key => $subcategory) {
                    if (!isset($prodcutCategoryWithGroup[$groupCategory][$key][$subcategory->id])) {
                        $prodcutCategoryWithGroup[$groupCategory][$key][$subcategory->id]['psc_name'] = $subcategory->name;
                    }
                }
            }
        }
       
    }
    return $prodcutCategoryWithGroup;
}
