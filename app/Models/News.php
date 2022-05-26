<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model{
    protected $table = "news";
    protected $fillable = [
        'name ',
        'description ',
        'image ',
        'document ',
        'news_for ',
        'associate_value ',
    ];
}
