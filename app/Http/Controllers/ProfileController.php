<?php

namespace App\Http\Controllers;

use App\Helper\Service\ProfileService;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\ProfileEmailUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class ProfileController extends Controller
{
    public function index($page)
    {
        return view('pages.admin.account.' . $page);
    }

    public function sellerIndex($page)
    {
        return view('pages.seller.account.' . $page);
    }

    /**
     * Display the user's profile form.
     *
     * @param \Illuminate\Http\Request $request
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
     * @param \App\Http\Requests\ProfileUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateDetails(ProfileUpdateRequest $request)
    {
        ProfileService::updateFromRequest($request);
        return back()->with('status', 'profile-updated');
    }

    /**
     * Update the user's profile Email information.
     *
     * @param \App\Http\Requests\ProfileEmailUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateEmail(ProfileEmailUpdateRequest $request)
    {
        $passwordValidated = ProfileService::validatePassword($request->confirmemailpassword);
        if (!$passwordValidated) {
            return back()->with('status', 'Password does not match');
        }
        ProfileService::updateFromRequest($request);
        return back()->with('status', 'Password-updated');
    }

    /**
     * Update the user's profile Email information.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateImage(Request $request)
    {
        $imageSaved = ProfileService::updateImageFromRequest($request);
        if ($imageSaved) {
            return back()->with('status', 'profile-image-updated');      
        }return back()->with('status', 'please choose image');
    }

    /**
     * Delete the user's account.
     *
     * @param \Illuminate\Http\Request $request
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
