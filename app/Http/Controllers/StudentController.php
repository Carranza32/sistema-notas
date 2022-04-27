<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Inscription;
use App\Models\Score;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::with('group', 'grade', 'user')->get();

        return response()->json([
            'status' => true,
            'message' => 'Student list',
            'data' => $data
        ]);
    }

    public function mySubjects()
    {
        $group = Auth::user()->student->group;
        $subjectKeys = Score::where('student_id', Auth::user()->student->id)->pluck('subject_id');

        return response()->json([
            'status' => true,
            'message' => 'Student list',
            'data' => [
                'group' => $group,
                'subjects' => Subject::whereIn('id', $subjectKeys)->get(),
            ]
        ]);
    }

    public function getStudentScore($id)
    {
        $student = Student::with('group')->where('id', $id)->first();

        $data = Score::with('subject', 'student')->where('student_id', $id)->get();

        $avg1 = $data->sum('average_period1') / 5;
        $avg2 = $data->sum('average_period2') / 5;
        $avg3 = $data->sum('average_period3') / 5;
        $final = ($avg1 + $avg2 + $avg3) / 3;

        return response()->json([
            'status' => true,
            'message' => 'Student list',
            'data' => [
                'scores' => $data,
                'globals' => [
                    'average1' => number_format($avg1, 2),
                    'average2' => number_format($avg2, 2),
                    'average3' => number_format($avg3, 2),
                    'final' => number_format($final, 2),
                ],
                'student' => $student
            ]
        ]);
    }

    public function getSubject($subject_id)
    {
        $student = Student::with('group.teacher.subject')->where('id', Auth::user()->student->id)->first();
        $scores = Score::where('student_id', Auth::user()->student->id)->where('subject_id', $subject_id)->get();

        return response()->json([
            'status' => true,
            'message' => 'Student list',
            'data' => [
                'scores' => $scores,
                'student' => $student,
                'subject' => Subject::find($subject_id),
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $data = Student::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Student created',
            'data' => $data
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Student::find($id);

        if ($data == null) {
            return response()->json([
                'status' => false,
                'message' => 'Not found',
                'data' => null
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Student',
            'data' => $data->with('group', 'grade', 'user')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, $id)
    {
        $data = Student::findOrFail($id);

        $data->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Student edited',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Student::destroy($id);

        return response()->json([
            'status' => true,
            'message' => 'Student deleted',
        ]);
    }
}
