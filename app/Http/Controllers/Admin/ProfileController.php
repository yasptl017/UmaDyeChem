<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('admin.profile');
    }

    public function updateAccount(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validateWithBag('account', [
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],
        ]);

        $user->update($validated);

        return redirect()->route('admin.profile.edit')->with('success', 'Account details updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $request->validateWithBag('password', [
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (! Hash::check($request->current_password, $user->password)) {
            return redirect()->route('admin.profile.edit')
                ->withErrors(['current_password' => 'The current password is incorrect.'], 'password');
        }

        $user->update(['password' => $request->password]);

        return redirect()->route('admin.profile.edit')->with('success', 'Password updated successfully.');
    }
}
