<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, Request as FacadesRequest};

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }


    public function users(Request $request)
    {
        $user = User::query();
        $reqcol_name = $request->has('col_name') ?  $request->col_name : '';
        $order_by = $request->has('order_by') ?  $request->order_by : '';
        $search = $request->has('search') ?  $request->search : '';
        if($reqcol_name && $order_by){
            $user = $user->orderBy($reqcol_name,$order_by);
        }
        if($search){
            $user = $user->where('name', 'LIKE', "%$search%");
        }
        $user = $user->paginate(10);
        $data['users'] = $user;
        //   echo '<pre>';  print_r($data['users']->toArray());
        return view('users', $data);
    }

    public function registerForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // $id = $request->id;
        // print_r($request->all()); die;
        $request->validate([
            'name'             => 'required',
            'email'            => 'required|unique:users,email|email',
            'phone'            => 'required|numeric|unique:users,phone',
            'insta_username'   => 'required|unique:users,insta_username',
            'interest'         => 'nullable',
            'message'          => 'required',
            'password'         => 'required'
        ]);

        $data = $request->except(['_token', 'password']);
        $data['password'] = Hash::make($request->password);
        $inserUser = User::addUser($data);
        // pr($inserUser); die;
        if ($inserUser) {
            Auth::login($inserUser);
            return redirect()
                ->route('home')
                ->with('success', 'User is created');
        } else {
            redirect()
                ->back()
                ->with('error', 'User is not created!');
        }
    }

    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('success', 'Signed in');
        }

        return redirect()->back()->with('error', 'Login details are not valid');
    }



    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            session()->flush();
            return redirect()->route('loginForm');
        }
    }
}
