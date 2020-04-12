<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function Home()
    {

        $user_todo = DB::table('to_doos')->where('user_id', Auth::user()->id)->get();
        return view('user.home', compact('user_todo'));
    }
}
