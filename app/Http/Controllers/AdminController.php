<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'email' => 'required',
            'farmname' => 'required',
            'number' => 'required',
            'password' => 'required',
        ]);
        $admin = new User();
        $admin->name = ucwords($request->name);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Str::random(20) . rand(0, 999) . time() . '.' . $extension;
            $image->move('backend/admin/images/', $imageName);
            $admin->image = 'backend/admin/images/' . $imageName;
        }
        $admin->email = $request->email;
        $admin->farmname = ucwords($request->farmname);
        $admin->number = $request->number;
        $admin->u_type = 'a';
        $admin->password = Hash::make($request->password);
        $admin->save();
        Alert::success('register succussfully', 'login again to visit dashboard');
        return redirect('/admin/login');
    }

    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credintials = $request->only(['email','password']);
        $user =  Auth::attempt($credintials);
        if($user == true)
        {
            Alert::success('login succussfully', 'welcome to dashboard');
            return redirect('/admin/dashboard');

        }
    }

    public function farmerStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'email' => 'required',
            'farmname' => 'required',
            'number' => 'required',
            'password' => 'required',
        ]);
        $admin = new User();
        $admin->name = ucwords($request->name);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Str::random(20) . rand(0, 999) . time() . '.' . $extension;
            $image->move('backend/admin/images/', $imageName);
            $admin->image = 'backend/admin/images/' . $imageName;
        }
        $admin->email = $request->email;
        $admin->farmname = ucwords($request->farmname);
        $admin->number = $request->number;
        $admin->u_type = 'f';
        $admin->password = Hash::make($request->password);
        $admin->save();
        Alert::success('register succussfully', 'login again to visit dashboard');
        return redirect('/admin/login');
        
    }
}
