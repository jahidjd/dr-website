<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogShort extends Model
{
    use HasFactory;
    protected $table = 'blog_shorts';
    protected $fillable = [
        'categories',
        'title',
        'details',
        'date',
        'image_short',
        'image_big',
        'status',
        'month'
    ];
    function Q_A(){
        return $this->hasMany(QandA::class,'id','blog_id');
    }
    function detailsSection(){
        return $this->hasMany(DetailsSection::class,'id','blog_id');
    }
    function details(){
        return $this->hasMany(BlogDetails::class,'id','blog_id');
    }
}
