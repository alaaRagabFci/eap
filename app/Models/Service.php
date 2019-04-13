<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title_ar', 'title_en', 'description_ar', 'description_en', 'icon'];
    public $timestamps  = false;
}
