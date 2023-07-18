<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationPopup extends Model
{
    use HasFactory;
    protected $table = 'consultation_popup';
    protected $fillable = [
        'message',
    ];
}
