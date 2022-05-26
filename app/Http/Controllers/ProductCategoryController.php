<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;
use App\Models\Product;

class ProductCategoryController extends Controller
{
    public function product_category(){
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
        // $prodcutCategoryWithGroup = array();
        // foreach ($groupCategoryList as $groupCategoryKey=>$groupCategory){
        //     $prodcutCategoryWithGroup[$groupCategory] = array();


        //     $RAW_QUERY = Product::select('product_category.id as pc_id' , 'product_category.name as pc_name')
        //     ->join('product_category','product_category.id','=','products.product_category_id')
        //     ->where('products.group_category','LIKE',"%'.$groupCategory.'%")
        //     ->groupby('products.name')
        //     ->orderby('product_category.name','ASC')
        //     ->get();

        //     if(empty($RAW_QUERY)) {
        //         unset($prodcutCategoryWithGroup[$groupCategory]);
        //         continue;
        //     }
        //     foreach ($RAW_QUERY as $key=>$value){
        //         if(!isset($prodcutCategoryWithGroup[$groupCategory][$value['pc_id']])){
        //             $prodcutCategoryWithGroup[$groupCategory][$value['pc_id']]['pc_name'] = $value['pc_name'];
        //         }
        //     }
        //     foreach($prodcutCategoryWithGroup[$groupCategory] as $key => $cat){
        //         $subcat = $this->em->getRepository(ProductsSubCategory::class)->findBy(['productCategory' =>  $key], ['name' => 'ASC']);
        //         foreach($subcat as $sub_key => $subcategory) {
        //             if(!isset($prodcutCategoryWithGroup[$groupCategory][$key][$subcategory->getId()])){
        //                 $prodcutCategoryWithGroup[$groupCategory][$key][$subcategory->getId()]['psc_name'] = $subcategory->getName();
        //             }
        //         }
        //     }
        // }
        return view('frontend.ProductCategory',compact('prodcutCategoryWithGroup'));
    }
      

}
