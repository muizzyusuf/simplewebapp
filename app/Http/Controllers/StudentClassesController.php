<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentClass;

class StudentClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('studentclasses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'courseid'=> 'required',
            'courseid'=> 'exists:courses,courseid',
            'studentid'=> 'required',
            'studentid'=>'exists:students,studentid',

            ]);

        $stuCourse = new StudentClass;
        $stuCourse->courseid = $request->input('courseid');
        $stuCourse->studentid = $request->input('studentid');
        $stuCourse->save();

        return redirect("/courses")->with('success', 'Student Added to '. $stuCourse['courseid']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($studentid, $courseid)
    {
        //
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$studentid)
    {
        //
        $this->validate($request, [
            'courseid'=> 'exists:courses,courseid',
            'studentid'=>'exists:students,studentid',

            ]);

        $courseid = $request->input('courseid');
        $studentid = $request->input('studentid');

        
        $courseStudent = StudentClass::where('courseid','=',$courseid)->where('studentid','=',$studentid);
        $courseStudent->delete();

        return redirect("/courses")->with('success', 'Student deleted');
    }
}
