<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Students;

class StudentsController extends Controller
{
    public function createStudentPage(){
        
        return view('addStudentPage');
    }

    public function storeStudent(Request $request){
    //    dd($request->all());

    // $students = Students::all();

    $student = new Students();
        $student->name = $request->name;
        $student->parent_name = $request->parent_name;
        $student->p_mobile_no = $request->p_mobile_no;
        $student->class = $request->class;
        $student->subjects = $request->subjects;
        $student->save();
        return redirect()->route('showallstudents')->with('success','Student Added Successfully');

    }

    public function showAllStudents(){
        // is variable me sary students store hen 
        $students = Students::all();
        
        return view('showAllStudents',compact('students'));
    }

    public function getStudentId($id){

       $student = Students::find($id);

       return view('editStudentPage',compact('student'));
    }

    public function updateStudent(Request $request){
        // dd($request->all());

        $student = Students::find($request->id);
        $student->name = $request->name;
        $student->parent_name = $request->parent_name;
        $student->p_mobile_no = $request->p_mobile_no;
        $student->class = $request->class;
        $student->subjects = $request->subjects;
        $student->save();

         return redirect()->route('showallstudents');
    }
    public function deleteStudent($id){
        // dd($id);
        $student= Students::find($id);
        $student->delete();
         return redirect()->route('showallstudents')->with('danger','Student Deleted Successfully');

    }
}
