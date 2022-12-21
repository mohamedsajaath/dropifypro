<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\ProfileEmailUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\MdCountry;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        $currency = MdCountry::where('id', $request->country_id)->first();
        // $request->user()->fill($request->validated());
        $user = $request->user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zipcode = $request->zipcode;
        $user->country_id = $request->country_id;
        $user->phone_no = $request->phone_no;
        $user->currency = $currency->currency_code;
        $user->save();
        if ($user->type == User::ADMIN) {
            return Redirect::route('admin.overview')->with('status', 'profile-updated');
        }return Redirect::route('seller.overview')->with('status', 'profile-updated');
    }

    /**
     * Update the user's profile Email information.
     *
     * @param  \App\Http\Requests\ProfileEmailUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateEmail(ProfileEmailUpdateRequest $request)
    {
        $user = $request->user();
        if (Hash::check($request->confirmemailpassword, $user->password,)) {
            $user->email = $request->emailaddress;
            $user->save();
            if ($user->type == User::ADMIN) {
                return Redirect::route('admin.overview')->with('status', 'Email-updated');
            }
            return Redirect::route('seller.overview')->with('status', 'Email-updated');
        }
        if ($user->type == User::ADMIN) {
            return Redirect::route('admin.profile')->with('status', 'Password does not match');
        }
        return Redirect::route('seller.profile')->with('status', 'Password does not match');
    }

    /**
     * Update the user's profile Email information.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateImage(Request $request)
    {
        $user = $request->user();
        if ($request->has('avatar')) {
            if (isset($user->avatar) && !empty($user->avatar) && file_exists(public_path('storage/' . $user->avatar))) {
                unlink(public_path('storage/' . $user->avatar));
            }

            $extension = $request->avatar->getClientOriginalExtension();
            $imageName = time() . "." . $extension;
            $path = $request->avatar->storeAs('public/images', $imageName);
            $user->image_url = str_replace('public/', '', $path);
            $user->save();
            if ($user->type == User::ADMIN) {
                return Redirect::route('admin.overview')->with('status', 'profile-image-updated');
            }
            return Redirect::route('seller.overview')->with('status', 'profile-image-updated');
        }
        if ($user->type == User::ADMIN) {
            return Redirect::route('admin.overview');
        }
        return Redirect::route('seller.overview');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
