<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class add extends Controller
{
    public function createPage()
    {
        return view('add');
    }
    public function addTask(Request $req)
    {
        if($req -> textarea2 != "")
        {
            $sumRow = 0; 
            $collection = Task::all();            
            foreach($collection as $item)
                $sumRow++;                        
            $d= getdate();
            $f= $d['mday']."/".$d['mon']."/".$d['year']."   ".($d['hours'] + 2 % 24 ).":". $d['minutes'].":". $d['seconds'];
            $task =new Task;
            $task -> taskId = $sumRow;
            $task -> taskDesc =  $req -> textarea2;
            $task -> addingDate = $f;
            $task -> isExecution = "no";
            $task -> isActive = 1;
            $task -> save();            
            return redirect('/');
        }
        else
        {           
            return view('add');
        }
            
        
    }
}
