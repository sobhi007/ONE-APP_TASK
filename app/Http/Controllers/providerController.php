<?php

namespace App\Http\Controllers;

use App\Models\locationDB;
use App\Models\providersDB;
use Auth;
use Illuminate\Http\Request;

class providerController extends Controller
{
    public function login()
    {
        if (Auth::guard('provider')->check()) {
            return redirect('provider');
        } else {
            return view('provider.login');
        }
    }

    public function logout()
    {
        Auth::guard('provider')->logout();
        return redirect('provider/login');
    }

    public function check(Request $request)
    {

        $data = $request->validate([

            'username' => 'required|min:5|max:20',
            'password' => 'required|min:8|max:20',
        ]);

        $remember_me = $request->remember_me ? 'true' : 'false';
        if (Auth::guard('provider')->attempt($data, $remember_me)) {

            return redirect('provider');

        } else {
            session()->flash('error', 'invalid username or password');
            return redirect('provider/login');
        }
    }

    public function index()
    {
        $id = Auth::guard('provider')->user()->id;
        $total_location = locationDB::where('provider_id', $id)->count();
        $locations = locationDB::where('provider_id', $id)->get();
        return view('provider.home', ['locations' => $locations, 'total_location' => $total_location]);
    }

    public function add_location()
    {

        return view('provider.add_location');
    }

    public function store_location(Request $request)
    {
        $data = $request->validate([

            'longitude' => 'required|unique:location',
            'latitude' => 'required|unique:location',
            'provider_id' => 'required',

        ]);
        $id = Auth::guard('provider')->user()->id;
        $total_location = locationDB::where('provider_id', $id)->count();

        if ($total_location < 5) {
            $op = locationDB::create($data);

            if ($op) {
                session()->flash('succ', 'New Location added successfully !! ');
                return redirect('provider/');
            } else {
                session()->flash('err', 'Something went wrong please try again!!   ');
                return redirect('provider/');
            }
        }else{
          echo  '<p style="color:red;text-align:center">You have reached the maximum number of Locations</p>';

        }

    }
    public function getUserData($user_name)
    {
        $id = providersDB::where("username", $user_name)->first()->id;
        $total_location = locationDB::where('provider_id', $id)->count();
        $locations = locationDB::where('provider_id', $id)->get();
        return view('provider.get', ['locations' => $locations, 'total_location' => $total_location]);
    }

}
