<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    //Dashboard Admin
    public function index()
    {
        return view('dashboard.index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function edit($id)
    {
        return view('dashboard.edit', [
            'user' => User::all()->find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name'      => 'required|max:255',
            'email'     => 'required|email|email:dns',
            'address'   => 'required',
            'phone'     => 'required'
        ];

        $where =  User::all()->find($id);
        if ($request->email != $where->email) {
            $rules['email'] = 'unique:users';
        };

        $validatedData = $request->validate($rules);

        User::where('id', $id)->update($validatedData);
        $request->session()->flash('success', 'Successfull Edit Data!');
        return redirect('/dashboard');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|max:255',
            'password'  => 'required|min:5|max:255',
            'email'     => 'required|email|unique:users|email:dns',
            'address'   => 'required',
            'phone'     => 'required'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        $request->session()->flash('success', 'Successfull Input Data!');
        return redirect('/dashboard');
    }

    public function destroy(Request $user, $id)
    {
        User::destroy($id);
        $user->session()->flash('success', 'Successfull Delete  Data!');
        return redirect('/dashboard');
    }
};
