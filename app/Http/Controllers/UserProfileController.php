<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UserProfileController extends Controller
{
    public function show()
    {
        // return view('pages.user-profile');
    }

    public function update(Request $request, $id)
    {
   
        $validated = $request->validate([
            'email'        => 'required|email',
            'passwordLama' => 'required|min:5',            
            'passwordBaru' => 'required|min:5'            
        ]);
    
        // $validated['passwordBaru'] = bcrypt($request->passwordBaru);     
  
        $cekPass    =   User::find($id);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->passwordLama])) {
            # code...
            
            $cekPass->password = $validated['passwordBaru'];
            $cekPass->save();
            
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login');
        } else {
            # code...            
            return redirect('/dashboard')->with('gagal', 'Password Lama Salah !!!');
        }
        

        // auth()->user()->update([
        //     'username' => $request->get('username'),
        //     'firstname' => $request->get('firstname'),
        //     'lastname' => $request->get('lastname'),
        //     'email' => $request->get('email') ,
        //     'address' => $request->get('address'),
        //     'city' => $request->get('city'),
        //     'country' => $request->get('country'),
        //     'postal' => $request->get('postal'),
        //     'about' => $request->get('about')
        // ]);
        // return back()->with('succes', 'Profile succesfully updated');
    }
}
