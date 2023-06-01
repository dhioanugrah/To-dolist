<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $title = "List Todo";
        return view('todo.index',
        [
            "title" => $title
        ]
    );
    }

    public function modal(){
        return view('todo.modal');
    }
    
}
