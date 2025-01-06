<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function all_students(){
        // $student = Student::where('city', 'cumilla')->first();
        // $student = Student::where("mark", 80)->first();
        // $students = Student::firstOrCreate([
        //     "name"=> "hacker80Paise",
        // ]);
        
        $students = Student::all()->min('mark');

        return response()->json($students);
    }

    public function add_student(Request $request){
        $request->validate([
            "name"=>'required|string',
            "email"=>'required|string',
            "city"=>'string',
            "mark"=>"integer"
        ]);

        $student = Student::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "city"=> $request->city,
            "mark"=> $request->mark
        ]);

        return response()->json($student);
    }

    public function update_student(Request $request){
        $request->validate([
            "id"=>"integer",
            "mark"=>"integer"
        ]);

        $user = Student::where("id", $request->id);
        $user->update([
            "mark"=> $request->mark,
        ]);
        return response()->json($user);
    }

}