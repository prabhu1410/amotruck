<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class EmployeeController extends Controller
{
     public function intex()
     {
          $employees = Employee::all();
          return view('admin.team_members',compact('employees'));
     }


    public function store(Request $request){

        
     $employees = new Employee;
     
     $employees->fname = $request->input('fname');
     $employees->lname = $request->input('lname');
     $employees->email = $request->input('email');
     $employees->phone = $request->input('phone');
     $employees->address = $request->input('address');
     $employees->role = $request->input('role');
     $employees->type = $request->input('type');
     $employees->status = $request->input('status');

     $employees->save();

     return redirect()->back();

     
 }


     public function edit($id)
     {
          $employees = Employee::find($id);
          return response()->json([
               'status'=>200, 
               'employees'=> $employees,
          ]);  
     }

     public function update(Request $request)
     {

          $team_id = $request->input('team_id');
          $employees = Employee::find($team_id);
     
          $employees->fname = $request->input('fname');
          $employees->lname = $request->input('lname');
          $employees->email = $request->input('email');
          $employees->phone = $request->input('phone');
          $employees->address = $request->input('address');
          $employees->role = $request->input('role');
          $employees->type = $request->input('type');
          $employees->status = $request->input('status');
     
          $employees->update();
     
          return redirect()->back();
     }

     public function destroy( Request $request )
     {
          $team_id =$request->input('delete_team_id');
          $employees = Employee::find($team_id);
          $employees->delete();
          return redirect()->back();
     }

     
}
