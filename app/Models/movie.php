<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;
    protected $fillable = ['title','overview','image','release_year','runtime','cast_member'];

    public function getImageAttribute($value)
    {
        return asset('Uploads/'.$value);
    }
}
