<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
//  /**
//  * Instantiate a new controller instance.
//  *
//  * @return void
//  */
//     public function __construct()
//     {
//         $this->middleware('auth');
//     }

    public function index()
    {
        $users = User::all();
        // return view('user', ['name' => 'Benito']);
        return view('user', compact('users'));
        // return [1, 2, 3]; // return an array
    }

    public function show($id)
    {
        return 'user Id:' . $id;
    }

    public function noaccess()
    {
        return view('noaccess');
    }

    public function post(Request $req)
    {
        // return $req->input(); // get all input
        return back()->withInput();
        // return $req->all(); // get everything
        // return $req->input('username'); // get on username
    }
}
