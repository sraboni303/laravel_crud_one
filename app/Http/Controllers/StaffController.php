<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
        public function index(){
        $staff = Staff::latest() -> get();
    	return view('staff.index', [
            'all_staff' => $staff
        ]);
    }

    public function create() {
    	return view('staff.create');
    }

    public function store(Request $request){
    	$this -> validate($request, [
    		'name' => 'required',
            'uname' => 'required | min:4 | max:20 | unique:staff',
            'email' => 'required | unique:staff',
            'cell' => 'unique:staff',
            'password' => 'required | min:7'
    	]);

    	// return $request -> all();
    	Staff::create([
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
        $delete = Staff::find($id);
        $delete -> delete();

        return redirect() -> back() -> with('deleted', 'Staff ID deleted ...');
    }


    public function show($id){
        $show = Staff::find($id);
        return view('staff.show',[
            'profile' => $show
        ]);
    }


    public function edit($id){

        return view('staff.edit');
    }
}
