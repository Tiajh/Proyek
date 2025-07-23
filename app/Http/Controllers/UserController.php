<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $allusers = DB::table('users')->get();
        $firstUser = DB::table('users')->first();
        $userNames = DB::table('users')->pluck('name');
        $userCount = DB::table('users')->count();
        $orderedUsers = DB::table('users')->orderBy('name')->get();
        $limitUsers = DB::table('users')->limit(2)->get();

        return view('user.user', compact(
            'allusers',
            'firstUser',
            'userNames',
            'userCount',
            'orderedUsers',
            'limitUsers'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);


        return redirect()->back()->with('success', 'Pesan Anda telah dikirim!');
    }
}