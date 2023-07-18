<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QandA extends Model
{
    use HasFactory;
    protected $table = 'q_and_a';
    protected $fillable = [
        'blog_id',
        'title',
        'details',
    ];
    function blog(){
        return $this->belongsTo(BlogShort::class,'blog_id','id');
    }
}
