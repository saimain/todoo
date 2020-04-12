<?php

namespace App\Http\Controllers\User;

use App\ToDoo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{

    public function Add(Request $request)
    {
        $request->validate([
            'todo' => 'required',
            'date' => 'required',
            'status' => 'required'
        ]);


        $new_todo = new ToDoo();
        $new_todo->user_id = Auth::user()->id;
        $new_todo->todo = $request->todo;
        $new_todo->note = $request->note;
        $new_todo->date = $request->date;
        $new_todo->status = $request->status;
        $new_todo->save();

        return 'saved';
    }
}
