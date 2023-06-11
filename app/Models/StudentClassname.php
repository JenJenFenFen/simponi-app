<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\StudentIdentity;
use App\Models\Classname;

class StudentClassname extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_classname',
        'id_student_identity'
    ];

    public function student_identities (): BelongsTo {
        return $this->belongsTo(StudentIdentity::class, 'id_student_identity');
    }

    public function classnames (): BelongsTo {
        return $this->belongsTo(Classname::class, 'id_classname');
    }
}
