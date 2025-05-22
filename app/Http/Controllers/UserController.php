<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); 
        return view('users.index', 
        ['users' => $users]);
    }
    public function create()
    {
        return view('users.create');
    }
  
}








//     public function show($id)
//     {
//         return view('users.show', ['id' => $id]);
//     }

//     public function create()
//     {
//         return view('users.create');
//     }

//     public function store(Request $request)
//     {
//         // Logic to store user data
//         return redirect()->route('users.index');
//     }
// }
