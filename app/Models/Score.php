<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'period1_score1',
        'period1_score2',
        'period1_score3',

        'period2_score1',
        'period2_score2',
        'period2_score3',

        'period3_score1',
        'period3_score2',
        'period3_score3',

        'final_average',
    ];

    protected $appends = [
        'average_period1',
        'average_period2',
        'average_period3',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function getAveragePeriod1Attribute($value)
    {
        $sum = ($this->period1_score1 ?? 0) + ($this->period1_score2 ?? 0) + ($this->period1_score3 ?? 0);
        $average = $sum / 3;

        return number_format($average, 2);
    }

    public function getAveragePeriod2Attribute($value)
    {
        $sum = ($this->period2_score1 ?? 0) + ($this->period2_score2 ?? 0) + ($this->period2_score3 ?? 0);
        $average = $sum / 3;

        return number_format($average, 2);
    }

    public function getAveragePeriod3Attribute($value)
    {
        $sum = ($this->period3_score1 ?? 0) + ($this->period3_score2 ?? 0) + ($this->period3_score3 ?? 0);
        $average = $sum / 3;

        return number_format($average, 2);
    }
}
