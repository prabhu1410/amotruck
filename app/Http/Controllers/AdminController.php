<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

use DB;

class AdminController extends Controller
{
    
    
    public function teammem(){
        return view('admin.team_members');
    }

    public function settings(){
        return view('admin.settings');
    }


   
    

}
