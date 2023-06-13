<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Models\User;




class UserController extends Controller
{
    public function index(){
        $data['list_user'] = User::all();
        return view('user.index',$data);
    }
    public function create(){
        return view('user.create');
    }
    public function store(Request $request){
        $request->validate(
        ['nama' =>'required',
        'username' => 'required|unique:user',
        'email' => 'required',
        'password' => 'required',
        'jenis_kelamin' => 'required',
        'no_hp' =>'required|min:10|max:15|unique:user',
        'role' => 'required',
        ],

        ['nama.required' => 'Wajib di Isi !!!',
        'username.required' => 'Wajib di Isi !!!',
        'username.unique' => 'Username sudah terdaftar.',
        'email.required' => 'Wajib di Isi !!!',
        'password.required' => 'Wajib di Isi !!!',
        'jenis_kelamin.required' => 'Wajib di Isi !!!',
        'no_hp.required' => 'Wajib di Isi !!!',
        'no_hp.min' => 'Nomor Handphone harus memiliki panjang minimal 10 karakter.',
        'no_hp.max' => 'Nomor Handphone harus memiliki panjang maksimal 15 karakter.',
        'no_hp.unique' => 'Nomor Handphone sudah terdaftar.',
        'role.required' => 'Wajib di Isi !!!',
        ]);
        $user= new User;
        $user-> nama = request('nama');
        $user-> username = request('username');
        $user-> email = request('email');
        $user-> password = request('password');
        $user-> jenis_kelamin = request('jenis_kelamin');
        $user-> role = request('role');
        $user->no_hp = request('no_hp');
        $user->save();

        return redirect('user')->with('success','Data berhasil ditambahkan');
    }

    public function show(User $user){
        $data['user'] = $user;
        return view('user.show', $data);
    }

    public function edit(User $user){
        $data['user'] = $user;
        return view('user.edit', $data);
    }

    public function update(User $user){
        $user-> nama = request('nama');
        $user-> username = request('username');
        $user-> email = request('email');
        $user-> no_hp = request('no_hp');
        if(request('password')) $user-> password = request('password');
        $user-> role = request('role');
        $user->save();

        return redirect('user')->with('warning','Data berhasil diupdate');
    }


    public function destroy(User $user){
        $user->delete();
        return redirect('user')->with('danger','Data berhasil dihapus');
    }

}
