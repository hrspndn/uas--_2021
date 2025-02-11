<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Auth extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $cek = DB::table('users')->where('email', '=', $email)->first();

        if ($cek) {
            if ($email == $cek->email) {
                if (password_verify($password, $cek->password)) {
                    session([
                        'email' => $cek->email,
                        'name' => $cek->name,
                    ]);
                    return redirect('/admin/dashboard');
                } else {
                    return redirect('/')->with('message', 'Password anda salah!');
                }
            } else {
                return redirect('/')->with('message', 'Email anda salah!');
            }
        } else {
            return redirect('/')->with('message', 'Akun anda belum terdaftar!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
