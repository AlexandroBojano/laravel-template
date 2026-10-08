<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\WebController;

use Illuminate\Support\Facades\Hash;

class WebController extends Controller
{
    public function users()
    {

        $user = User::all();

        
       

        return view('users', compact('user'));
    }


    public function userId($id)
    {

        $user = User::find($id);

        
       

        return view('userId', compact('user'));
    }

    

    public function createUser()
    {
        return view('createUser');
    }

    public function add(Request $request)
    
    {


        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            
        ]);

       User::create([
           'name' => $data['name'],
           'email' => $data['email'],
           'password' => Hash::make($data['password']),
       ]);
        return redirect('users');
    }



   
}
