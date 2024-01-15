<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the users.
     * 
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Display a listing of the users.
     * 
     */
    public function users(Request $request)
    {
        $users = User::all();
        return response()->json($users);
        // return datatables()->of($users)
        //     ->addColumn('action', function ($user) {
        //         $btn = '<a href="'.route('profile', $user->username).'" class="btn btn-sm btn-primary">View</a>';
        //         return $btn;
        //     })
        //     ->rawColumns(['action'])
        //     ->make(true);
    }
}
