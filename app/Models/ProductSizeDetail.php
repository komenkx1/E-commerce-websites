<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSizeDetail extends Model
{
    use HasFactory;

    public function size(){
        return $this->belongsTo(ProductSize::class,'size_id','id');
    }
}
