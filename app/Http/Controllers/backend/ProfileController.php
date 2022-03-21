<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        Gate::authorize('app.profile.update');
        return view('backend.profile.index');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name'  =>  'required|string|max:255',
            'email' =>  'required|string|max:255|unique:users,email,' . Auth::id(),
            'avatar'    =>  'nullable|image',
        ]);
        // return $request;
        // Get logged in user
        $user = Auth::user();
        // Update user info
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        // upload images
        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
            $ext = $image->extension();
            $file = time(). '.'.$ext;
            $image->storeAs('public/users',$file);//above 4 line process the image code
            $user->avatar =  $file;//ai code ta image ke insert kore
            $user->save();
        }
        // return with success msg
        notify()->success('Profile Successfully Updated.', 'Updated');
        return redirect()->back();
    }
    public function changepass()
    {
        Gate::authorize('app.profile.update');
        return view('backend.profile.password-change');
    }
    public function changepassword(Request $request)
    {
        $this->validate($request, [
            'current_password'  =>  'required|string|max:255',
            'password'  =>  'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                Auth::user()->update([
                    'password' => Hash::make($request->password)
                ]);
                Auth::logout();
                notify()->success('Password Successfully Changed.', 'Success');
                return redirect()->route('login');
            } else {
                notify()->warning('New password cannot be the same as old password.', 'Warning');
            }
        } else {
            notify()->error('Current password not match.', 'Error');
        }
        return redirect()->back();
    }
}
