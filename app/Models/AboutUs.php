<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $table = 'about_us';
    protected $fillable = [
        'online_booking',
        'medical_protection',
        'own_laboratory',
        'top_image',
        'video_image',
        'video_link',
    ];
}
