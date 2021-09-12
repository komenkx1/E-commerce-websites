<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function product_color_details(){
        return $this->hasMany(ProductColorDetail::class,'color_id','id');
    }

    public function product(){
        return $this->belongsToMany(Product::class,'product_color_details','color_id', 'product_id')->withPivot('id');
    }
}
