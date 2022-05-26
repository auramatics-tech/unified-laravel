<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jobs extends Model{
    protected $table = "jobs";
    protected $fillable = [
        'title ',
        'industry ',
        'experience ',
        'city ',
        'description ',
        'is_active ',
        'file ',
    ];
}
