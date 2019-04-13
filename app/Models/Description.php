<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $fillable = ['page', 'title_ar', 'title_en', 'description_ar', 'description_en', 'image'];
    public $timestamps  = false;
}
