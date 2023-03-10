<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use DB;

class update extends Controller
{
    public function createPage()
    {
        return view('update');
    }
    public function upTask(Request $req)
    {
        if($req -> textarea1 == "" && $req -> Desc == "")
            $req->validate(['textarea1'=>'required']);
        else
        {
            if($req -> textarea1 != "" )
                {        
                    $textarea1 = $req -> textarea1;
                    $Execution = $req -> Execution; 
                    $id = $req -> id;                                 
                    DB::update('update tasks set taskDesc = ?,isExecution = ? where id = ?',[$textarea1, $Execution,$id]);
                    return redirect ('/');
                }        
            else
                {
                    return view('update');
                } 
        }                             
    }
}
