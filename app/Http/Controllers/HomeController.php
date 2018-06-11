<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    

    // public function getDatabase()
    // {
    //     return Datatables::of(User::query())->make(true);
    // }

    public function index()
    {
        $user = Post::all();
        return view('post.home', compact('user'));
    }
}
