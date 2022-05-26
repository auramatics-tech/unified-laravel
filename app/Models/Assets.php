<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class assets extends Model{
    protected $table = "assets";
    protected $fillable = [
        'name ',
        'label ',
        'field_name ',
        'description ',
        'relate_id ',
        'thumbnail ',
    ];
}
