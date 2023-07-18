<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopSectionTwo extends Model
{
    use HasFactory;
    protected $table = 'top_section_two';
    protected $fillable = [
        'title',
        'details',
        'video_link',
    ];
}
