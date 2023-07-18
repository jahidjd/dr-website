<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopSection extends Model
{
    use HasFactory;
    protected $table = 'top_section';
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
    ];
}
