<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $fillable = [
        'address',
        'mobile',
        'email',
        'workday_from',
        'workday_end',
        'time_from',
        'time_end',
        'work_day_single',
        'work_time_single_start',
        'work_time_single_end',
        'off_day',
        'map',
        'logo'
    ];
}
