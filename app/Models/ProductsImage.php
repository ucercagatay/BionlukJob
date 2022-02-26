<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsImage extends Model
{
    use HasFactory;

    public function setFilenamesAttribute($value)
    {
        $this->attributes['image'] = json_encode($value);
    }
}
