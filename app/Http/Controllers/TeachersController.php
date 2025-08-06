<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Teachers;

class TeachersController extends Controller
{
      public function addteacher(){
        return view('addteacher');
    }

    public function storeteacher(Request $request){
        
        
        $teacher = new Teachers();
        $teacher->name = $request->name;
        $teacher->mobile_no = $request->mobile_no;
        $teacher->address = $request->address;
        $teacher->salary = $request->salary;
        $teacher->save();
        return redirect()->route('teacher')->with('success','Teacher added successfully');
        
    }
    
    public function  teacher(){
        $teacher = Teachers::all();
        
        return view('showallteacher',compact('teacher'));
    }
    
    public function getteacherid($id){
        
        $teacher = Teachers::find($id);
        
        return view('editteacher',compact('teacher'));
    }
    // catch(\ecceptional $e){return redirect back()->with 'danger' , 'Student already exists'}
    public function editteacher(Request $request){
        
        $teacher = Teachers::find($request->id);
        
        $teacher->name = $request->name;
        $teacher->mobile_no = $request->mobile_no;
        $teacher->address = $request->address;
        $teacher->salary = $request->salary;
        $teacher->save();
        return redirect()->route('teacher' )->with('success','Teacher updated successfully');
    }
    
    public function deleteteacher($id){
        // dd($id);
        $teacher= Teachers::find($id);
        
        $teacher->delete();
        
        return redirect()->route('teacher')->with('danger','teacher Deleted Successfully');
        
    }
   



    public function getteacher($id){
        $teacher = Teachers::find($id);
        
        return response()->json($teacher);
    }   

}
