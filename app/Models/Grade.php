<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function students(){

        return $this->hasMany(Student::class);
    }
    public function studentPhone()
    {
        return $this->hasOneThrough(Student::class, Phone::class,'grade_id','phone_id','id','id');
    }
}
