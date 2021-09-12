<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorDetail extends Model
{
    use HasFactory;

    public function color(){
        return $this->belongsTo(ProductColor::class,'color_id','id');
    }
}
