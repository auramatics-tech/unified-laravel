<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainCategory extends Model{
    protected $table = "main_category";
    protected $fillable = [
        'id  ',
        'name ',
    ];
    public function product_category()
    {
        return $this->hasMany(ProductCategory::class,'main_category_id','id');
    }

}
