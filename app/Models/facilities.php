<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class facilities extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'room_facilities');
    }
}
