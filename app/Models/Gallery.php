<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public function getVideoAttribute($value)
    {
        return $value ? $value : '/media/no_media.png'; 
    }
    public function getPicAttribute($value)
    {
        return $value ? $value : '/media/no_media.png';
    }
}
