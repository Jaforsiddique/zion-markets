<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table ='blogs';
    
    public function blog()
    {
        return $this->belongsTo('App\Blog','id');
    }
}
