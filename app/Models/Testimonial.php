<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
    protected $fillable = [
        'name',
        'post',
        'details',
        'image',
        'insta_link',
        'fb_link',
        'trt_link',
        'lnkd_link',
        'status',
    ];
}
