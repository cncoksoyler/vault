<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockDetail extends Model
{
    use HasFactory;

 

public function modelProducts(){
    return $this->belongsTo(Product::class,'product_id');
    
}

public function modelLocations(){
    return $this->belongsTo(Location::class,'location_id');
}

public function modelUsers(){
    return $this->belongsTo(User::class,'user_id');
}

public function modelInputSources(){
    return $this->belongsTo(InputSource::class,'input_source_id');
}

// public function modelForStock(){
//     return $this->belongsToMany(Product::class, Location::class, User::class, InputSource::class,'id');
// }

}
