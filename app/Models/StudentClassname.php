<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClassname extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_classname',
        'id_student_identity'
    ];
}
