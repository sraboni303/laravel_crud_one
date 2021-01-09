<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{

    public function index(){
        $teachers = Teacher::latest() -> get();
        return view('teachers.index', [
            'all_teacher' => $teachers
        ]);
    }


    public function create() {
        return view('teachers.create');
    }


    public function store(Request $request){
        $this -> validate($request, [
            'name' => 'required',
            'uname' => 'required | min:3 | max:20 | unique:teachers',
            'email' => 'required | unique:teachers',
            'cell' => 'unique:teachers',
            'password' => 'required | min:5 | max: 100'
        ]);
        // return $request -> all();
        Teacher::create([
            'name' => $request -> name,
            'uname' => $request -> uname,
            'cell' => $request -> cell,
            'email' => $request -> email,
            'age' => $request -> age,
            'password' => $request -> password
        ]);


        return redirect() -> back() -> with('success', 'Registration Completed Successfully ...');
    }




     public function delete($id){
        $delete = Teacher::find($id);
        $delete -> delete();

        return redirect() -> back() -> with('deleted', 'Teacher ID deleted ...');
    }







    public function show($id){
        $show = Teacher::find($id);
        return view('teachers.show',[
            'profile' => $show
        ]);
    }








    public function edit($id){

        return view('teachers.edit');
    }
 






























}
