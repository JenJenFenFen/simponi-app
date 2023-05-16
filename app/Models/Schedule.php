<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_lecturer_identity',
        'id_classname',
        'id_material',
        'day',
        'clock'
    ];
}
