<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function product_discounts(){
        return $this->hasMany(Discount::class,'product_id','id');
    }

    public function product_category(){
        return $this->hasMany(ProductCategory::class,'product_id','id');
    }

    public function product_image(){
        return $this->hasMany(ProductImage::class,'product_id','id');
    }

    public function product_size(){
        return $this->hasMany(ProductSizeDetail::class,'product_id','id');
    }

    public function product_color(){
        return $this->hasMany(ProductColorDetail::class,'product_id','id');
    }

    public function categorys(){
        return $this->belongsToMany(Category::class,'product_categories', 'product_id', 'category_id')->withPivot('id');
    }

    public function sizes(){
        return $this->belongsToMany(ProductSize::class,'product_size_details', 'product_id', 'size_id')->withPivot('id');
    }

    public function colors(){
        return $this->belongsToMany(ProductColor::class,'product_color_details', 'product_id', 'color_id')->withPivot('id');
    }
}
