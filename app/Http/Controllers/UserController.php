<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'users' => User::all(),
        ];
        return view('user.index', $data);
    }
    public function create()
    {
        return view('user.create');
    }
    public function edit($id)
    {
        $user = User::find($id);
        $data = [
            'user' => $user
        ];
        return view('user.edit', $data);
    }
    public function store(request $request)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $user = new User();
        $user->name = $name;
        $user->username = $username;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->save();
        return redirect('/user'); //เปลี่ยนหน้าไป
    }
    public function update(request $request, $id) //รับID
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::find($id);
        $user->name = $name;
        $user->username = $username;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->save();
        return redirect('/user'); //เปลี่ยนหน้าไป
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}
