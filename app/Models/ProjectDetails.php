<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetails extends Model
{
    use HasFactory;
    protected $table = 'project_details';
    protected $fillable = [
        'project_id',
        'title',
        'details',
        'video_link',
        'image',
    ];
    function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
