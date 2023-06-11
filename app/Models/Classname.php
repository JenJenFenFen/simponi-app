<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentIdentity;

class Classname extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name'
    ];

    public function student_identities () {
        return $this->hasMany(StudentIdentity::class);
    }
}
