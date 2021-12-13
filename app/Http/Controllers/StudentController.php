<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
      
        $students=Student::all();
       // $students=Student::get();
       // $students=Student::with('grade')->get();
        return view('student.index',compact('students'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     $grades=Grade::all();
      return  view('student.create',compact('grades'));

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
      //  $data=$request->all();
        $fna=$request->input('fname');
        $lna=$request->input('lname');

        $student=new Student();

        $student->first_name=$fna;
        $student->last_name=$lna;
        $student->save();


        return $lna." ".$fna;
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
        $student=Student::find($id);
     
      return  view('student.show',compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::find($id);
        $grades=Grade::all();
        return  view('student.edit',compact('student','grades'));
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
       // $data=$request->all();
        $fna=$request->input('fname');
        $lna=$request->input('lname');
        $grade_id=$request->input('gradeId');
        $student=Student::find($id);
        //$student=new Student();
        $student->first_name=$fna;
        $student->last_name=$lna;
        $student->grade_id=$grade_id;
        $student->save();



        return $lna." ".$fna;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student=Student::find($id);
        $student->delete();
        return "delete";
    }
}
