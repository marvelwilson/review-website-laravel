<?php

namespace satlex;

use Illuminate\Database\Eloquent\Model;
use satlex\SubCat;
class Cat extends Model
{
    protected $table ='cats';

    public function subcategories()
    {
        return $this->hasMany(SubCat::class, 'cat_id');
        //return $this->hasMany('App\SubCat', 'category_id', 'id');
    }
}