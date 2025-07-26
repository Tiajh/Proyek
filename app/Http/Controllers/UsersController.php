<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        // Ambil semua user
        $allUsers = User::all();

        // Ambil user pertama
        $firstUser = User::first();

        // Ambil hanya nama user (pluck)
        $userNames = User::pluck('name');

        // Hitung jumlah user
        $userCount = User::count();

        // Ambil user terurut berdasarkan nama
        $orderedUsers = User::orderBy('name')->get();

        // Ambil 2 user pertama
        $limitedUsers = User::limit(2)->get();

        return view('users.index', compact(
            'allUsers',
            'firstUser',
            'userNames',
            'userCount',
            'orderedUsers',
            'limitedUsers'
        ));
    }
}
