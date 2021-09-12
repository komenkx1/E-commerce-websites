<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function product_category(){
        return $this->hasMany(ProductCategory::class,'category_id','id');
    }

    public function product(){
        return $this->belongsToMany(Product::class,'product_categories','category_id', 'product_id')->withPivot('id');
    }
}
