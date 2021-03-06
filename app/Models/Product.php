<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;





    public function modelStocks(){
        return $this->hasMany(StockDetail::class,'id');
    }

    
    public function modelProduct(){
        return $this->hasMany(Location::class,'id');
    }
}
