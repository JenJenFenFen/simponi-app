<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\StudentClassname;

class Classname extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name'
    ];

    // public function student_classnames (): HasMany {
    //     return $this->hasMany(StudentClassname::class);
    // }
}
