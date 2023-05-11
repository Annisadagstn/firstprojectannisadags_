<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view('dashboard.login');
    }
    public function register()
    {
        return view('dashboard.register');
    }
    public function inputRegister(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required|min:4|max:50',
            'username' => 'required|min:4|max:8',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'username' =>
            $request->username,
            'email' =>
            $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/')->with('success', "Berhasil ");
    }
    public function auth (Request $request){
        $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required'
        ],
        [
            'username.exists' => "This username doesn't exists"
        ]);
    $user = $request->only('username', 'password');
    if (Auth::attempt($user)){
        return redirect()->route('todo.index');
    }else {
        return redirect('/')->with('fail', "Gagal Login, periksa dan coba lagi!");
    }
    }

    public function logout()
    {
        // menghapus history login
        Auth::logout();
        // mengarahkan kehalaman login
        return redirect('/');
    }

    public function index()
    {
        return view('dashboard.home');
    }

    public function complated()
    {
        //menampilkan halaman awal, semua data.
        
        return view('dashboard.complated');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'date' => 'required',
            'description' => 'required|min:8',
        ]);

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'status' => 0,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('todo.index')->with('successAdd', 'Berhasil menambahkan data ToDo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}

