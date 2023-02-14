<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Http;
use App\Models\Task;

class index extends Controller
{
    public function createPage()
    {

        return view('welcome');
    }
    public function getData()
    {

        $collection = Task::all() ->where ( 'isActive' , 1); 
        return view('welcome',['collection'=>$collection]);
        
    }
}
