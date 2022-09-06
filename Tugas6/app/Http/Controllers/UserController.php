<?php

namespace App\Http\Controllers;
use App\Models\User;


class UserController extends Controller {
    function index(){
        $data['list_user'] = User::all();
        return view('user.index', $data);

    }
    function create(){
        return view('user.create');
    }

    function store(){
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(User $user){
        $data['user'] = $user;
        return view('user.show', $data);
    }

    function edit(User $user){
        $data['user'] = $user;
        return view('user.edit', $data);
        
    }
    function update(User $user){
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        if(request('password')) $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user')->with('warning', 'Data Berhasil Diedit');
    }

    function destroy(User $user){
        $user->delete();

        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
    }
}