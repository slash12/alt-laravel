<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Yajra\DataTables\Facades\DataTables;

class EloquentController extends Controller
{
    function index()
    {
     return view('users.index');
    }

    // function getdata()
    // {
    //  $users = User::select('id', 'name', 'email');
    //  return Datatables::of($users)->make(true);
    // }
}
