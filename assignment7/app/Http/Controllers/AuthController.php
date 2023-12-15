<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginUser(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended("/");
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function registerUser(UserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        DB::table("users")->insert($data);
        return redirect("/login");
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
    }
    public function showprofile(){
        $user = Auth::user();
        return view('profile', compact('user'));
    }
    public function editprofile()
    {
        $user = Auth::user();
        return view('editprofile', compact('user'));
    }

    public function update(ProfileUpdateRequest $request)
    {
        $user = Auth::user();
        $data = $request->validated();
        // Hash the password only if it is provided
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            // Remove the password key from the data if not provided
            unset($data['password']);
        }

        $affected = DB::table('users')->where('id', $user->id)->update($data);

        if ($affected) {
            return redirect('profile')->with('success', 'Profile updated successfully');
        } else {
            // Handle the case when the update fails
            return redirect()->back()->with('error', 'Profile update failed');
        }
    }
}
