<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSubCategory extends Model{
    protected $table = "product_sub_category";
    protected $fillable = [
        'product_category_id ',
        'name ',
        'image ',
    ];
}
