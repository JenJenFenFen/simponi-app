<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classname extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_student_identity',
        'class_name'
    ];
}
