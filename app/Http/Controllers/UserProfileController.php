<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
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
            'passwordLama' => 'required|min:8',            
            'passwordBaru' => 'required|min:8'            
        ]);
    
        $validated['passwordLama'] = bcrypt($request->passwordLama);
        $validated['passwordBaru'] = bcrypt($request->passwordBaru);     
  
        $cekPass    =   User::find($id);

        if ($validated['passwordLama'] != $cekPass->password) {
            # code...
            return redirect('/dashboard')->with('gagal','Password Lama Salah !!!');
        } else {
            # code...
            if ($validated['passwordBaru'] === $cekPass->password) {
                # code...
                return view('pages.dashboard')->with('gagal','Password Baru Sama Dengan Password Lama !!!');
            } else {
                # code...
                $acount =   ($validated);
                $cekPass->update($acount);

                return view('pages.dashboard')->with('succes', 'Password Telah Berhasil Diubah !!!');
            }
            
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
