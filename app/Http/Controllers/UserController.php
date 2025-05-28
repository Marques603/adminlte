<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\UserProfile; 
use App\Models\UserInterest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query();

        $users->when($request->input('search'), function($query, $keyword) {
            $query->where(function($q) use ($keyword) {
                $q->where('name', 'like', '%' . $keyword . '%')
                  ->orWhere('email', 'like', '%' . $keyword . '%');
            });
        });

        $users = $users->paginate();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create($input);

        return redirect()->route('users.index')->with('status', 'Usuario adicionando com sucesso.');
    }
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    public function update(User $user, Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email', 
            'password' => 'exclude_if:password,null|min:6',
        ]);
        $user->fill($input);
        $user->save();

        return redirect()
        ->route('users.index')
        ->with('status', 'Usuario editado com sucesso.');
    }
    public function updateProfile(User $user, Request $request)
    {

        $input = $request->validate([
            'type' => 'required',
            'address' => 'nullable', 
        ]);

        UserProfile::updateOrCreate(
            ['user_id' => $user->id],
            $input);
         return back()
         ->with('status', 'Perfil editado com sucesso.');

    }
    public function destroy(User $user)
    {
               

                $user->delete();
                return back()->route('users.index')->with('status', 'Usuario removido com sucesso.');
    }
}
