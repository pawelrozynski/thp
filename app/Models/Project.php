<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectComment;

class Project extends Model
{

    public static function active()
    {
        return static::where('active', 1)->get();
    }
    
    public static function closed()
    {
        return static::where('active', 0)->get();
    }
    
    public function comments()
    {
        return $this->hasMany(ProjectComment::class);
    }
}
