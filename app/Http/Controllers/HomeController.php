<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() 
    {

        //Get id user

        $id_user = Auth::id();

        //Get List Book

        $book = DB::table('bookcontacts')->where('user_id', '=', $id_user)->get();
        

        return view('home.index', ['list' => $book]);
    }
}
