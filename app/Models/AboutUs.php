<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = "about_us";
    protected $fillable = ['title_ar', 'title_en', 'description_ar', 'description_en', 'image'];
    public $timestamps  = false;
}
