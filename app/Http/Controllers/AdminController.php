<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        // $users = User::paginate(10);
        // return view('admin.admin')->with('users', $users);
        $users = DB::table('users')->where('role', '=', '2')->paginate(10);
        return view('admin.admin')->with('users', $users);
    }

    public function getHocvien()
    {
        // $users = User::paginate(10);
        $users = DB::table('users')->where('role', '=', '2')->paginate(10);
        return view('admin.admin')->with('users', $users);
    }

    public function getGiangvien()
    {
        // $users = User::paginate(10);
        $users = DB::table('users')->where('role', '=', '1')->paginate(10);
        return view('admin.admin')->with('users', $users);
    }
}
