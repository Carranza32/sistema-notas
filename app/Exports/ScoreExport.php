<?php

namespace App\Exports;

use App\Models\Score;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ScoreExport implements FromCollection, WithHeadings
{
    protected $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function headings(): array
    {
        return [
            'Estudiante',
            'Materia',
            'Periodo 1 Actividad 1 30%',
            'Periodo 1 Actividad 2 30%',
            'Periodo 1 Actividad 3 35%',

            'Periodo 2 Actividad 1 30%',
            'Periodo 2 Actividad 2 30%',
            'Periodo 2 Actividad 3 35%',

            'Periodo 3 Actividad 1 30%',
            'Periodo 3 Actividad 2 30%',
            'Periodo 3 Actividad 3 35%',

            'Trimestre 1',
            'Trimestre 2',
            'Trimestre 3',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = Score::select(
            'students.name as estudiante',
            'subjects.name as materia',

            "scores.period1_score1",
            "scores.period1_score2",
            "scores.period1_score3",
            // 'scores.average_period1 as Trimestre 1',

            'scores.period2_score1',
            'scores.period2_score2',
            'scores.period2_score3',
            // 'scores.average_period2 as Trimestre 2',

            'scores.period3_score1',
            'scores.period3_score2',
            'scores.period3_score3',
            // 'scores.average_period3 as Trimestre 3',
            )
        ->join('students', 'scores.student_id', 'students.id')
        ->join('subjects', 'scores.subject_id', 'subjects.id')
        ->where('student_id', $this->id)
        ->get();

        return $data;
    }
}
