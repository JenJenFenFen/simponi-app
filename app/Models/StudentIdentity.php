<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentIdentity extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'name',
        'gender',
        'country',
        'date_birth',
        'religion',
        'ktp',
        'address',
        'status',
        'number_phone',
        'email',
        'last_education',
        'major_last_education',
        'school_last_education',
        'major',
        'study_program',
        'id_classname',
        'semester',
        'academic_year',
        'id_classname',
        'photo'
    ];
}
