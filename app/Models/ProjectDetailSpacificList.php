<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetailSpacificList extends Model
{
    use HasFactory;
    protected $table = 'details_spacific_list';
    protected $fillable = [
        'project_id',
        'title'
    ];
    function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
