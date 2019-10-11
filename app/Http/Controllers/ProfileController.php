<?php

namespace App\Http\Controllers;

use App\Managers\ImageManager;
use Illuminate\Http\Request;
use \App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Hash;
use \App\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('profile', ['profile' => \auth()->user()]);
    }

    /**
     * Update the user profile.
     *
     * @param ProfileUpdateRequest $request
     * @param ImageManager $imageManager
     *
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileUpdateRequest $request, ImageManager $imageManager)
    {
        $data = [
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'about' => $request->input('about')
        ];

        if($request->has('password')){
            $data['password'] = Hash::make($request->input('password'));
        }

        if($request->hasFile('avatar')){
            $user = auth()->user();
            $imageManager->uploadAvatar($request, $user);
        }

        User::where('id', auth()->id())->update($data);

        return redirect()->route('profile');
    }

    /**
     * Remove the user profile (account).
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        User::destroy(auth()->id());
        return redirect()->route('index');
    }
}
