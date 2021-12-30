<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class EmployeeController extends Controller
{
     function show(){

        $data = Employee::all();
         return view('admin.team_members',['teams'=>$data]);
     }

    
}
