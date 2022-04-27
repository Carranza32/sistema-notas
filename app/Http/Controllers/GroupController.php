<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Score;
use App\Models\Student;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Group::with('teacher')->get();

        return response()->json([
            'status' => true,
            'message' => 'Group list',
            'data' => $data
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
     * @param  \App\Http\Requests\StoreGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupRequest $request)
    {
        $data = Group::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Group created',
            'data' => $data
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Group::with('students', 'teacher')->where('id', $id)->first();

        if ($data == null) {
            return response()->json([
                'status' => false,
                'message' => 'Not found',
                'data' => null
            ], 404);
        }

        // $studentKeys = Student::where('group_id', $data->id)->pluck('id');

        // $data = Score::with('student.group.teacher')->whereIn('student_id', $studentKeys)->get();

        return response()->json([
            'status' => true,
            'message' => 'Group',
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupRequest  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupRequest $request, $id)
    {
        $data = Group::findOrFail($id);

        $data->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Group edited',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Group::destroy($id);

        return response()->json([
            'status' => true,
            'message' => 'Group deleted',
        ]);
    }
}
