<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Teacher;
use App\StudentClass;
use DB;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::orderBy('courseid', 'asc')->get();
        return view('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('courses.create');
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
            'title'=> 'required',
            'teacherid'=> 'required',
            'teacherid'=>'exists:teachers,teacherid',

            ]);

        $course = new Course;
        $course->courseid = $request->input('courseid');
        $course->title = $request->input('title');
        $course->teacherid = $request->input('teacherid');
        $course->save();

        return redirect("/courses")->with('success', 'Course Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($courseid)
    {
        $course = Course::find($courseid);
        $teacherid = $course['teacherid'];
        $teacher = Teacher::find($teacherid);
        $courseStudents = StudentClass::join('students','student_classes.studentid','=','students.studentid')->select('firstname','lastname', 'student_classes.studentid')->where('student_classes.courseid','=',$courseid)->get();
        return view('courses.show')->with('course', $course)->with('teacher', $teacher)->with('courseStudents',$courseStudents);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($courseid)
    {
        //
        $course=Course::find($courseid);
        return view('courses.edit')->with('course', $course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $courseid)
    {
        //
        $this->validate($request, [
            'courseid'=> 'required',
            'title'=> 'required',
            'teacherid'=> 'required',
            'teacherid'=>'exists:teachers,teacherid',

            ]);

       
       

        $course = Course::find($courseid);
        $course->courseid = $request->input('courseid');
        $course->title = $request->input('title');
        $course->teacherid = $request->input('teacherid');
        $course->save();

        return redirect("/courses")->with('success', 'Course Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($courseid)
    {
        //
        $course = Course::find($courseid);
        $course->delete();

        return redirect("/courses")->with('success', 'Student deleted');
    }
}
