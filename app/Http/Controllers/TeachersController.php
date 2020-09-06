<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Course;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teachers = Teacher::orderBy('firstname', 'asc')->get();
        return view('teachers.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('teachers.create');
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
            'firstname'=> 'required',
            'lastname'=> 'required',
            ]);

        $teacher = new Teacher;
        $teacher->firstname = $request->input('firstname');
        $teacher->lastname = $request->input('lastname');
        $teacher->save();

        return redirect("/teachers")->with('success', 'Teacher Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($teacherid)
    {
        //
        $teacher = Teacher::find($teacherid);
        $courses = Course::select('courseid','title')->where('teacherid','=',$teacherid)->get();
        return view('teachers.show')->with('courses', $courses)->with('teacher', $teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($teacherid)
    {
        //
        $teacher=Teacher::find($teacherid);
        return view('teachers.edit')->with('teacher', $teacher);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $teacherid)
    {
        //
            $this->validate($request, [
                'firstname'=> 'required',
                'lastname'=> 'required',
                ]);

        $teacher = Teacher::find($teacherid);
        $teacher->firstname = $request->input('firstname');
        $teacher->lastname = $request->input('lastname');
        $teacher->save();

        return redirect("/teachers")->with('success', 'Teacher Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($teacherid)
    {
        //
        $teacher = Teacher::find($teacherid);
        $teacher->delete();

        return redirect("/teachers")->with('success', 'Teacher deleted');
    }
}
