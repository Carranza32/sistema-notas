<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'teacher_id',
    ];

    protected $appends = [
        'students_count',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function getStudentsCountAttribute($value)
    {
        return Student::where('group_id', $this->id)->count();
    }
}
