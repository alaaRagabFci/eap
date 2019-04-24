<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['logo_ar','logo_en','location_ar','location_en', 'email', 'phone', 'facebook', 'twitter', 'google', 'box_number'];
    public $timestamps  = false;
}
