<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function product_size_details(){
        return $this->hasMany(ProductSizeDetail::class,'size_id','id');
    }

    public function product(){
        return $this->belongsToMany(Product::class,'product_size_details','size_id', 'product_id')->withPivot('id');
    }

}
