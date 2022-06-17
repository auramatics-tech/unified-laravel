<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model{
    protected $table = "product_category";
    protected $fillable = [
        'name',
        'image ',
    ];
    public function get_sub_category()
    {
        return $this->hasMany(ProductSubCategory::class,'product_category_id','id');
    }
    
    public function products()
    {
        return $this->hasMany(Product::class,'product_category_id','id');
    }
}
