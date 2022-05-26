<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model{
    protected $table = "products";
    protected $fillable = [
        'name ',
        'available_packaging ',
        'datsheet ',
        'stock_status ',
        'short_description ',
        'technical_specification ',
        'price ',
        'quantity ',
        'product_category_id  ',
        'products_sub_category_id  ',
        'manufacturer_id  ',
        'image ',
        'availability ',
        'rohs ',
        'eccn ',
        'qty_min ',
        'qty_multiple ',
        'eccm ',
        'hs_code ',
        'product_status ',
        'threeDModel ',
        'group_category ',
        'lead_time ',
        'coo ',
        'series ',
    ];
    public function manufuture_info()
    {
        return $this->hasOne(Manufacturer::class,'id','manufacturer_id');
    }
}
