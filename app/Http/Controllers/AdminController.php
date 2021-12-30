<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class AdminController extends Controller
{
    
    
    public function teammem(){
        return view('admin.team_members');
    }

    public function settings(){
        return view('admin.settings');
    }

    public function employee(Request $request){
        $employees = new Employee;
        
        $employees->fname = $request->fname;
        $employees->lname = $request->lname;
        $employees->email = $request->email;
        $employees->phone = $request->phone;
        $employees->address = $request->address;
        $employees->role = $request->role;
        $employees->type = $request->type;
        $employees->status = $request->status;

        $employees->save();

        return redirect()->back();
    }

    

}
