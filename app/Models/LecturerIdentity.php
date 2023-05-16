<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturerIdentity extends Model
{
    use HasFactory;

    protected $fillable = [
        'nid',
        'name',
        'gender',
        'country',
        'date_birth',
        'religion',
        'address',
        'status',
        'number_phone',
        'email',
        'last_education',
        'major_last_education',
        'division',
        'position',
        'date_join',
        'photo'
    ];
}
