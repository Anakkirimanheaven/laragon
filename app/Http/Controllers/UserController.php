<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Alert;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        confirmDelete("Delete", "Are You Sure?");
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'isAdmin' => 'required'
        ]);

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = hash::make($request->password);
        $users->isAdmin = $request->isAdmin;
        $users->save();
        Alert::success('Success', 'User berhasil Ditambahkan')->autoClose(1000);
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.user.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'isAdmin' => 'required'
        ]);

        $users = User::findOrFail($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = hash::make($request->password);
        $users->isAdmin = $request->isAdmin;
        Alert::success('Success', 'User berhasil Diubah')->autoClose(1000);
        $users->save();

        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        Alert::success('Success', 'User berhasil Dihapus')->autoClose(1000);
        return redirect()->route('user.index');
    }
}
