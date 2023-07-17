<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class COnsultationImage extends Model
{
    use HasFactory;
    protected $table = 'consultation_image';
    protected $fillable = ['image'];
}
