<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function features()
    {
        return $this->belongsToMany(Features::class,'features_id','id');
    }

    public function facilities()
    {
        return $this->belongsToMany(facilities::class,'facilities_id','id');
    }
}
