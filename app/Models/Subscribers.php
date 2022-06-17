<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subscribers extends Model{
    protected $table = "subscribers";
    protected $fillable = [
        'email',
    ];
}
