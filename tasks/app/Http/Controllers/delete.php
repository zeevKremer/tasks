<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use DB;

class delete extends Controller
{
    public function createPage()
    {
        return view('delete');
    }
    public function delete(Request $req)
    {
        if($req -> delete != "")
        {
            $id = $req -> delete;
            DB::update('update tasks set isActive = ? where taskId = ?',[0,$id]);
        }

        return redirect('/');
        
    }
}
