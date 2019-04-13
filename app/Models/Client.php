<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name_ar', 'name_en', 'type_id'];
    public function getType()
    {
        return $this->belongsTo('App\Models\Type','type_id','id');
    }
    public $timestamps  = false;
}
