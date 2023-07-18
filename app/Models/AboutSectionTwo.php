<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSectionTwo extends Model
{
    use HasFactory;
    protected $table = 'about_section_two';
    protected $fillable = [
        'section_title',
        'section_q',
        'details',
        'image',
        'p_title_one',
        'p_title_two',
        'p_title_three',
        'p_title_four',
        'p_value_one',
        'p_value_two',
        'p_value_three',
        'p_value_four',
    ];
}
