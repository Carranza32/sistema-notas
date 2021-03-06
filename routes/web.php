<?php

use App\Models\Group;
use App\Models\Inscription;
use App\Models\Score;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('fix', function(){
    $students = Student::all();

    foreach ($students as $student) {
        $student->group_id = Group::all()->random()->id;
        $student->save();
    }
});

Route::get('test', function () {
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
    ->where('student_id', 26)
    ->get();

    // $avg1 = $data->sum('average_period1') / 5;
    // $avg2 = $data->sum('average_period2') / 5;
    // $avg3 = $data->sum('average_period3') / 5;
    // $final = ($avg1 + $avg2 + $avg3) / 3;

    return $data;
});

Route::get('generate', function () {
    $students = Student::all();

    foreach ($students as $student) {
        $inscription = new Inscription();
        $inscription->group_id = Group::all()->random()->id;
        $inscription->student_id = $student->id;
        $inscription->save();

        $subjects = Subject::all();

        foreach ($subjects as $subject) {
            $period1_score1 = number_format(rand(1, 10), 2);
            $period1_score2 = number_format(rand(1, 10), 2);
            $period1_score3 = number_format(rand(1, 10), 2);

            $period2_score1 = number_format(rand(1, 10), 2);
            $period2_score2 = number_format(rand(1, 10), 2);
            $period2_score3 = number_format(rand(1, 10), 2);

            $period3_score1 = number_format(rand(1, 10), 2);
            $period3_score2 = number_format(rand(1, 10), 2);
            $period3_score3 = number_format(rand(1, 10), 2);

            $average1 = ($period1_score1 + $period1_score2 + $period1_score3) / 3;
            $average2 = ($period2_score1 + $period2_score2 + $period2_score3) / 3;
            $average3 = ($period3_score1 + $period3_score2 + $period3_score3) / 3;

            $score = new Score();
            $score->student_id = $student->id;
            $score->subject_id = $subject->id;

            $score->period1_score1 = $period1_score1;
            $score->period1_score2 = $period1_score2;
            $score->period1_score3 = $period1_score3;

            $score->period2_score1 = $period2_score1;
            $score->period2_score2 = $period2_score2;
            $score->period2_score3 = $period2_score3;

            $score->period3_score1 = $period3_score1;
            $score->period3_score2 = $period3_score2;
            $score->period3_score3 = $period3_score3;

            $score->final_average = (number_format($average1, 2) + number_format($average2, 2) + number_format($average3, 2)) / 3;

            $score->save();
        }
    }
});
