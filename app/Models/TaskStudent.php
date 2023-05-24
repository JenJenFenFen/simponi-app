<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_task_lecturer',
        'id_student_identity',
        'task_file',
        'score'
    ];
}
