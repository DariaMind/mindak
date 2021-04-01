<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holl extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'address', 'timetable_img', 'map_img'];


     public function getTimetableImgAttribute($value)
    {
        return $value ? $value : '/media/no_media.png'; 
    }
    public function getMapImgAttribute($value)
    {
        return $value ? $value : '/media/no_media.png'; 
    }

   
}
