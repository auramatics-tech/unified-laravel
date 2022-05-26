<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\News;
use App\Models\Manufacturer;
use App\Models\Assets;
use App\Models\Product;
use App\Models\ProductCategory;

class ManufacturerDetailController extends Controller
{ 
    public function manufacturer_detail($id=null, Request $request) {
        $subCategories = Product::select('product_category.name',  'product_category.id', 'product_category.image')
        ->join('manufacturer', 'manufacturer.id', '=', 'products.manufacturer_id')
        ->join('product_category', 'product_category.id', '=', 'products.product_category_id')
        ->where('manufacturer.id', $id)
        ->groupby('products.product_category_id')
        ->get();

        $manufacturer = Manufacturer::find($id);
        
        $groupCategories = Product::select('products.group_category','manufacturer.id' , 'manufacturer_id',
        'manufacturer.video', 'manufacturer.download_resources')
        ->join('manufacturer' , 'manufacturer.id' , '=' , 'products.manufacturer_id')
        ->where('manufacturer.id' , $id)
        ->groupby('products.group_category')
        ->get();
        
        $videoAssets = Assets::where(array('relate_id' => $id, 'field_name'=>'video'))->get();
        $show_video_section = 0;
        foreach($videoAssets as $asset){
            if(!empty($asset->name)) {
                $show_video_section = 1;
                break;
            }
        }
        $downloadResourcesAssets = Assets::where(array('relate_id' => $id, 'field_name'=>'downloadResources'))->get();
        $show_resources_section = 0;
        foreach($downloadResourcesAssets as $asset){
            if(!empty($asset->name)) {
                $show_resources_section = 1;
                break;
            }
        }

        $newsList = News::where('associate_value', $id)->orderBy('id', 'DESC')->get();
        return view('frontend.propertydetail',compact('groupCategories' , 'videoAssets' , 'manufacturer', 'subCategories' ,'downloadResourcesAssets' , 'show_video_section' , 'show_resources_section' , 'newsList'));
        
    }

}