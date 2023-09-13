<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('admin.profile.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {



        if ($request->has('update_profile_info') && $request->update_profile_info == 'information') {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ]);
            $user  = User::where('id', $id)->first();
            $user->update($request->except('_method', 'update_profile_info', '_token', 'password'));
            return redirect()->back()->with('success', 'User Profile successfully updated!');
        }
        if ($request->has('update_profile_info') && $request->update_profile_info == 'password') {
            $request->validate([
                'current_password' => 'required',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required',
            ]);
            $user  = User::where('id', $id)->first();
            $hashedPassword = $user->password;
            if (Hash::check($request->current_password, $hashedPassword)) {
                if (Hash::check($request->current_password,$hashedPassword)) {
                    $user->update([
                        'password' => Hash::make($request->password),
                    ]);
                      auth('web')->logout();
                    return redirect()->back()->with('success', 'Password successfully changed!');

                } else {
                    return redirect()->back()->with('warning', 'new password can not be the old password!');
                }
            } else {
                return redirect()->back()->with('danger', 'old password doesnt matched');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
