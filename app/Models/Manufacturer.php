<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manufacturer extends Model{
    protected $table = "manufacturer";
    protected $fillable = [
        'name  ',
        'about ',
        'part_no  ',
        'image  ',
        'website ',
        'video ',
        'download_resources  ',
        'is_key_principal  ',
    ];
}
