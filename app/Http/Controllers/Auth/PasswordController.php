<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Redirect;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        
        $validated = $request->validateWithBag('updatePassword', [
            'currentpassword' => ['required', 'currentpassword'],
            'newpassword' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['newpassword']),
        ]);
      
        // return back()->with('status', 'password-updated');
        return Redirect::route('admin.account.',['page'=>'overview'])->with('status', 'password-updated');
    }
}
