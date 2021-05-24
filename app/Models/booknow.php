<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booknow extends Model
{
    use HasFactory;
    protected $fillable = ['m_id','m_name','person_name','numoftkt'];
}
