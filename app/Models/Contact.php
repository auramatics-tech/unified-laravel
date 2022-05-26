<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model{
    protected $table = "contact_us";
    protected $fillable = [
        'name ',
        'email_address ',
        'phone_number ',
        'subject ',
        'comments ',
        'country ',
        'city ',
        'company ',
        'attachment ',
    ];
}
