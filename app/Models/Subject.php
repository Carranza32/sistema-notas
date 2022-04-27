<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Subject extends Model
{
    use HasFactory;

    protected $appends = [
        'student_average',
    ];

    protected $fillable = [
        'name',
        'description',
    ];

    public function getStudentAverageAttribute($value)
    {
        if (Auth::user()->student) {
            return Score::where('student_id', Auth::user()->student->id)->where('subject_id', $this->id)->first()->final_average ?? 0.0;
        }

        return null;
    }
}
