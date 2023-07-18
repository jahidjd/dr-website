<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'title',
        'details',
        'image',
        'status',
    ];
    function PrjectDetails(){
        return $this->hasMany(ProjectDetails::class,'id','project_id');
    }
    function list(){
        return $this->hasMany(ProjectDetailSpacificList::class,'id','project_id');
    }
}
