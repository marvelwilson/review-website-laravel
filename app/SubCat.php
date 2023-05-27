<?php

namespace satlex;
use satlex\Cat;

use Illuminate\Database\Eloquent\Model;

class SubCat extends Model
{
    protected $table ='sub_cats';
    public function categories()
    {
        return $this->belongsTo(Cat::class, 'cat_id');
    }
}