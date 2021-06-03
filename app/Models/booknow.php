<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booknow extends Model
{
    use HasFactory;
    protected $fillable = ['m_id','m_name','user_id','person_name','booking_date','seat_num','theatre_id','show_id','numoftkt'];
}
