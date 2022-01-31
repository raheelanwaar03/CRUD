<?php

namespace App\Http\Controllers;

use App\Models\student;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return view('index',[
            'students' => $students,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
           'name' => 'required',
           'roll' => 'required',
           'class' => 'required',
           'email' => 'required',
        ]);
        $student = new student();
        $student->name = $validated['name'];
        $student->roll = $validated['roll'];
        $student->class = $validated['class'];
        $student->email = $validated['email'];
        $student->save();
        return redirect()->route('student.index')->with('massage','Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        $student = student::find($student->id);
        return view('show',[
            'student'=> $student,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        return view('edite',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        $validated = $request->validate([
            'name' => 'required',
            'roll' => 'required',
            'class' => 'required',
            'email' => 'required'
         ]);

         $task = student::find($student->id);
         $task->name = $validated['name'];
         $task->roll = $validated['roll'];
         $task->class = $validated['class'];
         $task->email = $validated['email'];
         $task->save();
         
         return redirect()->route('student.index')->with('massage','Information Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student->delete();
        return redirect()->back();
    }
}
