<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogDetails extends Model
{
    use HasFactory;
    protected $table = 'blog_details';
    protected $fillable = [
        'blog_id',
        'short_details',
        'image_one',
        'image_two',
        'tags',
        'quotation',
        'quoted_by',
        'post',
        'more_details',
    ];
    function blog(){
        return $this->belongsTo(BlogShort::class,'blog_id','id');
    }
}
