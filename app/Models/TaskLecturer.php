<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskLecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_lecturer_identity',
        'id_classname',
        'id_material',
        'task_name',
        'description',
        'task_file',
        'deadline'
    ];
}
