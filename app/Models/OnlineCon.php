<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineCon extends Model
{
    use HasFactory;
    protected $table = 'online_consultation';
    protected $fillable = [
        'title',
        'details',
        'status',
    ];
}
