<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    public function getPhotoAttribute($value)
    {
        return $value ? $value : '/img/no_photo.png'; 
    }
}
