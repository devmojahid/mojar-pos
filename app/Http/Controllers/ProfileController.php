<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
        /**
        * Create a new controller instance.
        *
        * @return void
        */
        public function __construct()
        {
            $this->middleware("auth");
        }
    
        /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Contracts\Support\Renderable
        */
        public function index($username): \Illuminate\Contracts\View\View
        {
            $user = User::where("username", $username)->firstOrFail();
            return view("profile.profile", compact("user"));
        }

        /**
         * Update the user's profile information.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\RedirectResponse
         */

        public function update(ProfileUpdateRequest $request,ProfileService $profileService): \Illuminate\Http\RedirectResponse
        {
            $user = auth()->user();
            $profileService->update(
                $request->validated(),
                 $user,
                 $request->hasFile("avatar") ? $request->file("avatar") : null
            );
            return back()->with(["success" => "Profile updated successfully."]);
        }

        /**
         * Show the change password page.
         *
         * @return \Illuminate\Contracts\View\View
         */
        
        public function changePassword(): \Illuminate\Contracts\View\View
        {
            return view("profile.change-password");
        }

        /**
         * Update the user's password.
         * 
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\RedirectResponse
         */
        
        public function updatePassword(PasswordUpdateRequest $request,ProfileService $profileService): \Illuminate\Http\RedirectResponse
        {
            $profileService->updatePassword($request->validated(), auth()->user());
            // $request->validate([
            //     "current_password" => "required",
            //     "password" => "required|confirmed",
            // ]);
            // $user = auth()->user();
            // if (!\Hash::check($request->current_password, $user->password)) {
            //     return back()->withErrors(["current_password" => "The provided password does not match your current password."]);
            // }
            // $user->update([
            //     "password" => \Hash::make($request->password),
            // ]);
            return back()->with(["success" => "Password updated successfully."]);
        }

}
