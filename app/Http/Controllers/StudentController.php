<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::latest() -> get();
    	return view('students.index', [
            'all_student' => $students
        ]);
    }

    public function create() {
    	return view('students.create');
    }

    public function store(Request $request){
    	$this -> validate($request, [
    		'name' => 'required',
            'uname' => 'required | min:4 | max:20 | unique:students',
            'email' => 'required | unique:students',
            'cell' => 'unique:students',
            'password' => 'required | min:7'
    	]);

    	// return $request -> all();
    	Student::create([
    		'name' => $request -> name,
    		'uname' => $request -> uname,
    		'email' => filter_var($request -> email, FILTER_VALIDATE_EMAIL),
    		'cell' => $request -> cell,
    		'age' => $request -> age,
    		'password' => password_hash($request -> password, PASSWORD_DEFAULT)
    	]);

    	return redirect() -> back() -> with('success', 'Registration Successful...');
    }


    public function delete($id){
        $delete = Student::find($id);
        $delete -> delete();

        return redirect() -> back() -> with('deleted', 'Student ID deleted ...');
    }


    public function show($id){
        $show = Student::find($id);
        return view('students.show',[
            'profile' => $show
        ]);
    }


    public function edit($id){

        return view('students.edit');
    }

}
