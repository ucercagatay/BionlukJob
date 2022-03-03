<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public function getCategory(){
        return $this->hasOne('App\Models\Categorie','id','category_id');
    }
    public function getImages(){
        return $this->hasMany('App\Models\ProductsImage','product_id','id');
    }
    public function getFirstİmage(){
        return $this->hasOne('App\Models\ProductsImage','product_id','id');
    }
}
