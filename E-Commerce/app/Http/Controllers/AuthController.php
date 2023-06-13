<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
		public function login()
		{
		    return view('auth.login');
		}


		public function logout()
		{
            Auth::logout();
            return redirect()->route('/');
		}


		function proses_login()
		{
            if (Auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
            $hakAkses = Auth::user()->role;
            if ($hakAkses == "admin") {
            return redirect('beranda')->with('success', 'login berhasil');
            }if ($hakAkses == "user"){
                return redirect('/')->with('success', 'Login Behasil');
            }
            elseif ($hakAkses == "staff") {
            return redirect('beranda')->with('success', 'login berhasil');
            }
            }

            return back()->with('danger', 'login gagal, silahkan cek username dan password anda');
		}

        Public function daftar(){
            return view('register');
        }

        public function daftarshow(Request $request)
        {
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

        return redirect('login')->with('success', 'Registration Successful! Silahkan Login');
        }



}
