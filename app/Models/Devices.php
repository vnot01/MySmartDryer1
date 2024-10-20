<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name', 
        'device_type', 
        'device_UID', 
        'user_id'
    ];

    public function things()
    {
        return $this->hasMany(Things::class);
    }
}
