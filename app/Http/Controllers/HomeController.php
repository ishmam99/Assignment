<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Visitor;

class HomeController extends Controller
{
    public function About(){
        return view('about-us');
    }
    public function team(){
        return view('team');
    }
    public function contact(){
        return view('contact');
    }
    public function service(){
        return view('service');
    }
    public function employee(){
        return view('employee');
    }
    public function store(Request $req ){
        $name=$req->name;
        $email=$req->email;
        $salary=$req->salary;
        $birth_date=$req->birth_date;

        $obj =new Employee();
        $obj->birth_date=$birth_date;
        $obj->name=$name;
        $obj->salary=$salary;
        $obj->email=$email;
        if($obj->save()){
            return redirect('/list')->with('success', 'New Employee Added');
        }

    }
    public function list(){
        $data =Employee::all();
        return view('list',['employees'=>$data]);

    }
    public function edit($id){
        $employee=Employee::find($id);
        return view('update',compact('employee'));
    }
    public function update(Request $req ,$id){
        $name=$req->name;
        $email=$req->email;
        $salary=$req->salary;
        $birth_date=$req->birth_date;

        $obj =Employee::find($id);
        $obj->birth_date=$birth_date;
        $obj->name=$name;
        $obj->salary=$salary;
        $obj->email=$email;
        if($obj->save()){
            return redirect('/list')->with('success', 'Employee Updated');
        }


    }
    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/list')->with('delete', 'Employee deleted!');
    }
    public function visitor(){
        $data =Visitor::all();
        return view('visitor_list',['visitors'=>$data]);

    }
}
