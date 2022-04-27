<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Teacher::with('group', 'subject', 'user')->get();

        return response()->json([
            'status' => true,
            'message' => 'Teacher list',
            'data' => $data
        ]);
    }

    public function myGroups()
    {
        $data = Auth::user()->teacher->groups;

        return response()->json([
            'status' => true,
            'message' => 'Teacher list',
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
     * @param  \App\Http\Requests\StoreTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {
        $data = Teacher::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Teacher created',
            'data' => $data
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Teacher::find($id);

        if ($data == null) {
            return response()->json([
                'status' => false,
                'message' => 'Not found',
                'data' => null
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Teacher',
            'data' => $data->with('user', 'subject', 'group')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherRequest  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherRequest $request, $id)
    {
        $data = Teacher::findOrFail($id);

        $data->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Teacher edited',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Teacher::destroy($id);

        return response()->json([
            'status' => true,
            'message' => 'Teacher deleted',
        ]);
    }
}
