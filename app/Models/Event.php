<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    public static function realized()
    {
        return static::where('realized', 1)->get();
    }
    
    public static function planed()
    {
        return static::where('realized', 0)->get();
    }
}
