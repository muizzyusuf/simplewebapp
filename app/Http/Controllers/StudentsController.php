<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Address;
use App\StudentClass;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('firstname', 'asc')->get();
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
            'address'=> 'required',
            'city'=> 'required',
            'zipcode'=> 'required',

            ]);

        $address = new Address;
        $address->address = $request->input('address');
        $address->city = $request->input('city');
        $address->zipcode = $request->input('city');
        $address->save();

        $student = new Student;
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->addressId = $address->addressId;
        $student->save();

        return redirect("/students")->with('success', 'Student Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $studentid
     * @return \Illuminate\Http\Response
     */
    public function show($studentid)
    {
        //
        $student=Student::find($studentid);
        $addId = $student['addressId'];
        $address = Address::find($addId);
        $courseStudents = StudentClass::join('courses','courses.courseid','=','student_classes.courseid')->select('courses.courseid','title')->where('student_classes.studentid','=',$studentid)->get();
        return view('students.show')->with('student', $student)->with('address', $address)->with('courseStudents', $courseStudents);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $studentid
     * @return \Illuminate\Http\Response
     */
    public function edit($studentid)
    {
        $student=Student::find($studentid);
        $addId = $student['addressId'];
        $address = Address::find($addId);
        return view('students.edit')->with('student', $student)->with('address', $address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $studentid)
    {
        //
         //
         $this->validate($request, [
            'firstname'=> 'required',
            'lastname'=> 'required',
            'address'=> 'required',
            'city'=> 'required',
            'zipcode'=> 'required',

            ]);

       
       

        $student = Student::find($studentid);
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $addId = $student['addressId'];
        $address = Address::find($addId);
        $address->address = $request->input('address');
        $address->city = $request->input('city');
        $address->zipcode = $request->input('city');
        $address->save();
        $student->save();

        return redirect("/students")->with('success', 'Student Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($studentid)
    {
        $student = Student::find($studentid);
        $addId = $student['addressId'];
        $address = Address::find($addId);
        $address->delete();
        $student->delete();

        return redirect("/students")->with('success', 'Student deleted');
    }
}
