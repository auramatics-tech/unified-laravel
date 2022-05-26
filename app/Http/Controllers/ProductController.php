<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductSubCategory;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class ProductController extends Controller
{
    public function product_category($index = '', Request $request){
        // $groupCategoryList = array(
        //     'Electromechanical Components' => 'Electromechanical Components',
        //     'Passive Components'=>'Passive Components',
        //     'Power Components'=>'Power Components',
        //     'Interconnect'=>'Interconnect',
        //     'Wireless & Memory'=>'Wireless & Memory',
        //     'Sensors'=>'Sensors',
        //     'Display & Systems'=>'Display & Systems',
        //     'RF & Microwave'=>'RF & Microwave',
        //     'Batteries'=>'Batteries',
        // ); 
        
        // $productCategoryWithGroup = array();
        // foreach ($groupCategoryList as $groupCategoryKey=>$groupCategory){
            
        //     $productCategoryWithGroup[$groupCategory] = array();
        //     $result = Product::select('product_category.id as pc_id' , 'product_category.name as pc_name')
        //     ->join('product_category','product_category.id','=','products.product_category_id')
        //     ->where('products.group_category','LIKE',"%".$groupCategory."%")
        //     ->groupby('products.name')
        //     ->orderby('product_category.name','ASC')
        //     ->get();
        //     foreach ($result as $key=>$value){
        //         if(!isset($productCategoryWithGroup[$groupCategory][$value['pc_id']])){
        //             $productCategoryWithGroup[$groupCategory][$value['pc_id']]['pc_name'] = $value['pc_name'];
        //             $productCategoryWithGroup[$groupCategory][$value['pc_id']]['manufactures'] = Product::select('manufacturer.id as manufacturer_id' , 'manufacturer.image as manufacturer_image')
        //             ->join('manufacturer','manufacturer.id', '=' , 'products.manufacturer_id')
        //             ->where('products.product_category_id',$value['pc_id'])
        //             ->where('products.group_category', 'LIKE' ,"%'.$groupCategoryKey.'%" )
        //             ->groupby('manufacturer.id')
        //             ->orderby('manufacturer.name','ASC')
        //             ->get();

        //         }
        //     }
           
        //     // if(empty($RAW_QUERY)) {
        //     //     unset($productCategoryWithGroup[$groupCategory]);
        //     //     continue;
        //     // }
        //     // foreach ($RAW_QUERY as $key=>$value){
        //     //     if(!isset($productCategoryWithGroup[$groupCategory][$value['pc_id']])){
        //     //         $productCategoryWithGroup[$groupCategory][$value['pc_id']]['pc_name'] = $value['pc_name'];
        //     //     }
        //     // }
        //     foreach($productCategoryWithGroup[$groupCategory] as $key => $cat){
        //         $subcat = ProductSubCategory::where('product_category_id',$key)->orderby('name','ASC')->get();
        //         foreach($subcat as $sub_key => $subcategory) {
        //             if(!isset($productCategoryWithGroup[$groupCategory][$key][$subcategory->id])){
        //                 $productCategoryWithGroup[$groupCategory][$key][$subcategory->id]['psc_name'] = $subcategory->name;
        //             }
        //         }
        //     }
        // }
        return view('frontend.ProductCategory',compact('index'));
    }
      

}
