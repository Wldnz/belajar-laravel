<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Students;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show($id){
        return view("test",["student" => Contacts::find($id)->students]);
    }


    public function showAllData(){
        $student = DB::table("students")->paginate(10)->items();;
        return view("students.main",["students" => $student]);
    }

    public function showFormData(){
        return view("students.add");
    }

    public function showFormUpdateData($id){
        return view("students.update",["student" => Students::findOrFail($id)]);
    }

    public function showFormDeleteData($id){
        return view("students.delete",["student" => Students::findOrFail($id)]);
    }

    public function addingData(Request $request){
        $student = new Students();
        $student->name = $request->name;
        $student->score = $request->score;
        $student->save();
        return redirect()->route("students");
    }

    public function updatingData(Request $request,$id){
        $student = Students::find($id);
        $student->name = $request->name;
        $student->score = $request->score;
        $student->created_at = $request->created_at;
        $student->updated_at = $request->updated_at;
        $student->save();
        return redirect()->route("students");
    }

    public function deletingData(Request $request,$id){
        $student = Students::find($id);
        $student->delete();
        return redirect()->route("students");
    }

}

