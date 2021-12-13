<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeGroup extends Model
{
    use HasFactory;

    public function gradeStudent()
    {
        return $this->hasOneThrough(Student::class, Grade::class);
    }
}
