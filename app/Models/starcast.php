<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class starcast extends Model
{
    use HasFactory;
    //protected $table = 'starcasts';
    protected $fillable = ['name','bio','birth_date','worked_movie'];
}
