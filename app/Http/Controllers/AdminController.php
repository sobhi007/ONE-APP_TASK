<?php

namespace App\Http\Controllers;

use App\Models\providersDB;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        if (Auth::guard('admin')->check()) {
            return redirect('admin');
        } else {
            return view('admin.login');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function check(Request $request)
    {

        $data = $request->validate([

            'username' => 'required|min:5|max:20',
            'password' => 'required|min:8|max:20',
        ]);

        $remember_me = $request->remember_me ? 'true' : 'false';
        if (Auth::guard('admin')->attempt($data, $remember_me)) {

            return redirect('admin');

        } else {
            session()->flash('error', 'invalid username or password');
            return redirect('admin/login');
        }
    }

    public function index()
    {
        $count = providersDB::count();
        return view('admin.home')->with(['count' => $count]);
    }

    public function providers()
    {
        $providers = providersDB::paginate(3);
        return view('admin.providers',['providers' => $providers]);
    }

    public function add_providor()
    {
        return view('admin.add_provider');
    }

    public function store_provider(Request $request)
    {
        $data = $request->validate([

            'username' => 'required|min:5|max:20|unique:providers',
            'password' => 'required|min:8|max:20',
            'email' => 'required|email|unique:providers',
            'name' => 'required|min:3|max:30',

        ]);

        $data['password'] = bcrypt($request->password);

        $op = providersDB::create($data);

        if ($op) {
            session()->flash('succ', 'New provider added successfully !! ');
            return redirect('admin/providers');
        } else {
            session()->flash('err', 'Something went wrong please try again!!   ');
            return redirect('admin/providers');
        }

    }

}
