<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Things extends Model
{
    //
    use HasFactory;

    protected  
    $fillable = [
        'thing_type',
        'status', 
        'device_id',  
        'value',
    ];
   
       public function device()
       {
           return $this->belongsTo(Devices::class);
       }
}
